<!DOCTYPE html>
<html lang="en">
<head>
<? include 'func.php'?>
<link rel="stylesheet" type="text/css" href="gamegami.css">
<meta charset="utf-8" />
<title>GameGami</title>
<meta name="description=" content="GameGami mallows mobile game developers to connect more easily with gamers via our RESTful API. We make gaming more social! ">
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
<div align='center' id='maintext'>
Ready to <span class="GamiText">challenge</span> your <span class="GamiText">friends</span>?!?</br /><br />Get your favorite <span class="GamiText">game</span>, connect through your <span class="GamiText">social network</span> and start the <span class="GamiText">fun</span>!
</div>
<div id='screenshots'>
<div id='homescreen1'><img src='screen1.png'></div>
<div id='homescreen2'><img src='screen2.png'></div>
<div id='homescreen3' align='right'><img src='screen3.png'></div>
<div id='homescreentext1'>1-Select a game</div>
<div id='homescreentext2'><span class="GamiText">2-</span>Connect and<br /> challenge</div>
<div id='homescreentext3'><span class="GamiText">3-</span>Have fun!</div>
</div>
<div align='center' id='bottomboxes'>
<div class='dev_box' align='left'><div id='devimg' ></div>
<div id='dev_text'>Increase the visibility of your game,<br />using our network of users.</div><div class='div_button' align='center'><a href='http://www.gamegami.com/dev'><button class='home_button'>Learn More</button></a></div></div>
<div class='look_box' align='left'><div id='lookimg'></div></div>
<div class='game_box'>
<div id='gamerimg'></div>
<form id='emailform' name="input" action="formsubmit.php" method="post">
<input type="text" placeholder="Enter your name" name="username" id="username"/><br />
<input type="text" placeholder="Email" name="useremail" id="useremail" /><br />
<input type="checkbox" name="vehicle" value="Car" /> <strong style="font-size: 10px;">Want to be a VIP Beta User?</strong><br /><br />
<input type="submit" value="Sign up for a free app" id="submit"/>
</form>
</div>
</div>
</div>
<? printfooter(); ?>

</body>
</html>
