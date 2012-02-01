<!DOCTYPE html>
<html lang="en">
<head>
<? include '/nfs/c07/h02/mnt/99900/domains/gamegami.com/html/func.php'; ?>
 <link rel="stylesheet" type="text/css" href="http://www.gamegami.com/gamegami.css">
<meta charset="utf-8" />
<title>GameGami for Developers</title>
<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>

<body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26235804-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<div id='container'>
<div align='center'><div id='pagecontent'>
	<?
		printheader();
	?>
<div  align='center'><div class='dev_main'><h3 align='center'>Game Developers</h3>
<form id='emailform' name="input" action="formsubmit.php" method="post">
<strong>Email Address:</strong> <input type="text" name="useremail" id="useremail" />
<input type="submit" value="Submit" id="submit"/>
</form>
<script>
$('#submit').click(function() {
	alert('Thanks for your interest! We will contact you with regular updates about GameGami');
});
</script>
</div></div>
</div>
</div>
<? printfooter(); ?>
</body>
</html>
