#!/usr/bin/php
<?php
error_reporting(E_ALL);
if (count($argv) <= 1) {
	print("usage createMockup src_dir dst_dir images_dir\n");
	print("\tsrc_dir : dir where all bmml file are\n");
	print("\tdst_dir : dir where write all html files\n");
	print("\timages_dir : dir where all export mockup png are (will be copied to the \$dst_dir/images directory)\n");
	exit(1);
}
$src_dir = trim($argv[1],'/');
$dst_dir = trim($argv[2],'/');
$images_dir = trim($argv[3],'/');
$links = array();

function filter($value) {
	$value = htmlentities($value, ENT_NOQUOTES);
	$value = preg_replace('#\&([A-za-z])(?:acute|cedil|circ|grave|ring|tilde|uml)\;#', '\1', $value);
	$value = preg_replace('#\&([A-za-z]{2})(?:lig)\;#', '\1', $value); // pour les ligatures e.g. 'œ'
	return $value;
}

function cleanFileName($filename, $ext) {
	$filename = str_replace(array('%20', ' '), '_', $filename);
	$filename = filter($filename);
	return str_replace('.bmml', '.'.$ext, $filename);
}

function crossControlList($controls, $x = 0, $y = 0) {
	global $links;
	foreach ($controls->children() as $control) {
		$coords = array('x' => $x + $control['x'], 'y' => $y + $control['y']);
		if (isset($control->groupChildrenDescriptors)) {
			crossControlList($control->groupChildrenDescriptors,$coords['x'],$coords['y']);
		}
		if (isset($control->controlProperties->map)) {
			$hrefs = isset($control->controlProperties->hrefs) ? explode('%2C',$control->controlProperties->hrefs) : array($control->controlProperties->href);// array_pop($hrefs);
			$maps = str_replace(array('&lt;','&gt;'),array('<','>'), filter(rawurldecode(((string)$control->controlProperties->map))));
			//print_r($maps);
			$mapsxml = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?><map>'. $maps .'</map>');
			//print_r($mapsxml);
			foreach ($mapsxml->area as $area) {
				$areacoords = explode(',',$area['coords']);			
				$href = rawurldecode($area['href']);
				$listhref = explode('&bm;',$href);
				echo "maps = ", $listhref[0], "\n";
				$links[] = array(
					'href' => $listhref[0],
					'zOrder' => $control['zOrder'],
					'x' => (string)$areacoords[0],
					'y' => (string)$areacoords[1],
					'w' => (string)$areacoords[2] - $areacoords[0],
					'h' => (string)$areacoords[3] - $areacoords[1],
				);
			}
		} elseif ($href = (string)$control->controlProperties->href) {
			$href = rawurldecode($href);
			$listhref = explode('&bm;',$href);
			echo "href = ",$listhref[0], "\n";
			$links[] = array(
				'href' => $listhref[0].'.bmml',
				'zOrder' => $control['zOrder'],
				'x' => (string)$coords['x'],
				'y' => (string)$coords['y'],
				'w' => (string)$control['w'] != '-1' ? (string)$control['w'] : (string)$control['measuredW'],
				'h' => (string)$control['h'] != '-1' ? (string)$control['h'] : (string)$control['measuredH']
			);
		}
	}
}

function createHtml($filename, $links, $title = '',$dimensions) {
    global $dst_dir, $images_dir;
    $width = $dimensions[0];
    $height = $dimensions[1];
    $contents = '<html><title>'.(empty($title)?$filename:$title).'</title><style> body  {position: relative; margin: 20px; } a:hover { background: #000000; opacity: 0.2; filter: alpha(opacity = 20); }</style><body>';
    $contents .= '<div style="width: ' . $dimensions[0] . '; height: ' . $dimensions[1] . '; position: relative; background: no-repeat url(images/'.cleanFileName($filename,'png').')">&nbsp;';
    foreach ($links as $key=>$link) {
        $contents .= '<a style="display: block; width: '.$link['w'].'px; height: '.$link['h'].'px; position: absolute; left: '.($link['x']).'px; top: '.($link['y']).'px" href="'.cleanFileName($link['href'],'html').'">&nbsp;</a><br />';
    }
    $contents .= '</div></body></html>';
    file_put_contents($dst_dir.'/'.cleanFileName($filename,'html'),$contents);
}

function sort_list($a,$b) {
	return $b['zOrder'] < $a['zOrder'];
}
if (!file_exists($dst_dir)) {
	echo "Create directory $dst_dir...\n";
	mkdir($dst_dir);
}
if ($dh = opendir($src_dir.'/')) {
	echo "Process mockup in $src_dir ...\n";
    while (($file = readdir($dh)) !== false) {
    $links = array();
		$filepath = $src_dir .'/'. $file;
		$imagepath = $images_dir .'/'. str_replace('.bmml', '.png', $file);
        if (filetype($filepath) == 'file' &&  substr($file, strlen($file) - 5) == ".bmml") {
			echo "Process $file ...\n";
            $xml = simplexml_load_file($filepath);
			crossControlList($xml->controls);
			usort($links, "sort_list");
			$browserWindowValues = $xml->xpath('//control[@controlTypeID="com.balsamiq.mockups::BrowserWindow"]/controlProperties/text');
			if (count($browserWindowValues)) {
				$browserWindowValue = explode("\n",rawurldecode($browserWindowValues[0]));
				$title = $browserWindowValue[0];
			}
			else {
				$title = str_replace('.bmml', '', $file);
			}
			echo "title = ", $title, "\n";
			$dimensions = getimagesize($imagepath);
            createHtml($file,$links,$title,$dimensions);
        }
    }
    closedir($dh);
} else die ('Nie mo&#380;na otworzy&#263; katalogu src');
if ($dh = opendir($images_dir.'/')) {
	echo "Process mockup images from $images_dir ...\n";
	if (!file_exists($dst_dir .'/images')) {
		echo "Create directory $dst_dir/images...\n";
		mkdir($dst_dir .'/images');
	}
	while (($file = readdir($dh)) !== false) {
		$filepath = $images_dir .'/'. $file;
		if (filetype($filepath) == 'file' &&  substr($file, strlen($file) - 4) == ".png") {
			echo "Copy $file ...\n";
			copy($filepath, $dst_dir .'/images/' . cleanFileName($file, 'png'));
		}
	}
	closedir($dh);
} else die ('Nie mo&#380;na otworzy&#263; katalogu src');