<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->
 <link rel="stylesheet" type="text/css" href="http://www.gamegami.com/gamegami.css">
	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<div id="footer" align="center" style="height: 125px;">
    <p class="links">
    <div id="social">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <a href="http://www.gamegami.com">Home</a>
    <a href="http://www.gamegami.com/blog">Blog</a>
    <a href="http://www.gamegami.com/api">API</a>
    <a href="http://www.gamegami.com/about">About us</a>
    <a href="http://www.gamegami.com/contact">Contact</a><br /><br />
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
    <!-- Place this tag where you want the +1 button to render -->
    <g:plusone annotation="inline" width="200"></g:plusone>
<div class="fb-like" data-href="www.gamegami.com" data-send="false" data-width="350" data-show-faces="false" data-action="recommend" data-colorscheme="dark"></div>
    </div>
    </p>
</div></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>