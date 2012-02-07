<!DOCTYPE html>
<html lang='en'>
<head>
	<? include '/nfs/c07/h02/mnt/99900/domains/gamegami.com/html/func.php'; ?>
 <link rel='stylesheet' type='text/css' href='http://www.gamegami.com/gamegami.css'>
<meta charset='utf-8' />
<title>How it Works</title>
<script src='//platform.twitter.com/widgets.js' type='text/javascript'></script>
<script src='http://code.jquery.com/jquery-latest.js'></script>
<link rel='shortcut icon' href='./favicon.ico' />
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
<div id="worksContent">
	<div class="headerText">What is GameGami?</div>
	<div class="worksText">GameGami is an Android application that allows users to challenge each other through their favorite mobile games. Users can customize the conditions of the challenge--the duration, the participants, and the specific game at stake are all up to you.</div> 
<div class="worksText">	
Once the participants accept, the challenge begins. At the end, the winner collects points (which we call 'GameGamis') from the losers, and can use those points to purchase rewards in the physical world.</div>
	<div class="headerText">How can I find out more?</div>
	<div class="worksText">If you'd like to participate in user studies, or be a beta tester, or if you're just interested in hearing about periodic updates, please enter your email address below. We'll be in touch when we have something to share.</div>
	<div class="worksText">
	<form id='emailform' name="input" action="formsubmit.php" method="post"> 	
	<strong>Email Address:</strong> <input type="text" name="useremail" id="useremail" />
	<input type="submit" value="Submit" id="submit"/>
	</form>
	<script>
	$('#submit').click(function() {
		alert('Thanks for your interest! We will contact you with regular updates about GameGami.');
		});
	</script>
		</div>
	</div>
<? printfooter(); ?>
</body>
</html>
