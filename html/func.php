<?

function printheader() {
	echo "<div id='header'>
	<div id='mainlogo'></div></div>
	<div id='navbar'>
		<div  id='navitems'>
		<a href='http://www.gamegami.com'>Home</a>
		<a href='http://www.gamegami.com/howitworks'>How it works</a>
	    <a href='http://www.gamegami.com/api'>API</a>
	    <a href='http://www.gamegami.com/about'>About us</a>
		</div>
	</div>";
	
}

function printfooter() {
	echo "<div id='footer'>
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
	    <script type='text/javascript'>
	      (function() {
	         var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	         po.src = 'https://apis.google.com/js/plusone.js';
	         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	      })();
	    </script>";
	
}

?>