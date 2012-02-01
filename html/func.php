<?

function printheader() {
	echo "<div id='header'>
	<div id='mainlogo'></div><div align='right' id='tagline'>Mobile Games Made Social</div></div>
	<div id='navbar'>
		<div align='center' id='navitems'>
		<a href='http://www.gamegami.com'>Home</a>
	    <a href='http://www.gamegami.com/blog'>Blog</a>
	    <a href='http://www.gamegami.com/api'>API</a>
	    <a href='http://www.gamegami.com/about'>About us</a>
	    <a href='http://www.gamegami.com/contact'>Contact</a>
		</div>
	</div>";
	
}

function printblogheader() {
	echo "<div id='blogheader'>
	<div id='mainlogo' name='GameGami'></div><div align='right' id='tagline'>Mobile Games Made Social</div></div>
	<div id='blognavbar'>
		<div align='center' id='blognavitems'>
		<a href='http://www.gamegami.com'>Home</a>
	    <a href='http://www.gamegami.com/blog'>Blog</a>
	    <a href='http://www.gamegami.com/api'>API</a>
	    <a href='http://www.gamegami.com/about'>About us</a>
	    <a href='http://www.gamegami.com/contact'>Contact</a>
		</div>
	</div>";
	
}

function printfooter() {
	echo "<div id='footer' align='center'>
	    <p class='links'>
	    <div id='social'>
	<div id='fb-root'></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) {return;}
	  js = d.createElement(s); js.id = id;
	  js.src = '//connect.facebook.net/en_US/all.js#xfbml=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<br /><br />
	<a href='https://twitter.com/share' class='twitter-share-button'>Tweet</a>
	    <!-- Place this tag where you want the +1 button to render -->
	    <g:plusone annotation='inline' width='200'></g:plusone>
	<div class='fb-like' data-href='www.gamegami.com' data-send='false' data-width='350' data-show-faces='false' data-action='recommend' data-colorscheme='dark'></div>  
	    </div>
	</div>
	</div>
	</div>
	    <script type='text/javascript'>
	      (function() {
	         var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	         po.src = 'https://apis.google.com/js/plusone.js';
	         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	      })();
	    </script>";
	
}

?>