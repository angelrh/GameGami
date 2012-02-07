<!DOCTYPE html>
<html lang='en'>
<head>
	<? include '/nfs/c07/h02/mnt/99900/domains/gamegami.com/html/func.php'; ?>
 <link rel='stylesheet' type='text/css' href='http://www.gamegami.com/gamegami.css'>
<meta charset='utf-8' />
<title>API</title>
<script src='//platform.twitter.com/widgets.js' type='text/javascript'></script>
<script src='http://code.jquery.com/jquery-latest.js'></script>
<link rel='shortcut icon' href='favicon.ico' />
</head>

<body>
<script type='text/javascript'>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26235804-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?
	printheader();
?>
<div id="apiContent">
	<div class="headerText">Game Developers</div>
	<div class="apiText">
		The GameGami API is extremely simple and easy to integrate into fully developed  games. Using a RESTful architectural style, our system takes care of all the heavy lifting, so developers can kiss concerns about scaling goodbye!</div>
		<div class="apiText">
		GameGami also knows how important it is to keep players in the game once they've fired it up. Our API allows users to issue challenges and access their results without having to exit the game. 
		</div>
		<div class="headerText">How can I get started?</div>
		<div class="apiText">
		We're currently in the development stage, but if you're interested in sharing feedback about the product, or helping us iron out the kinks, we'd love to hear from you. Please shoot us an email at <a href="mailto:info@gamegami.com">info@gamegami.com</a>.
	</div>
	<div id="apiSpace"></div>
<? printfooter(); ?>
</body>
</html>
