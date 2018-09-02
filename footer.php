<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer-menu">
<div id="footer-menu-wrapper">

<div class="grid col-300" id="linksFooterLeft" style="display:none">
<div id="websitelinks">
<h4><a href="http://www.fausga.com/" style="color:#bcbcbc" title="author website design">Author Website Design</a></h4>
<a href="http://www.fausga.com/author-websites-examples/" title="Author Websites Examples" class="footer-link">Author Websites Examples</a><br>
<a href="http://www.fausga.com/" title="Novel Website Design" class="footer-link">Novel Website Design</a> <br>
<a href="http://www.fausga.com/" title="Book Author Website Design" class="footer-link">Book Author Website Design</a><br>
<a href="http://www.fausga.com/" title="Mystery Author Website Design" class="footer-link">Mystery Author Website Design</a><br>
<a href="http://www.fausga.com/" title="Horror Author Website Design" class="footer-link">Horror Author Website Design</a><br>
<a href="http://www.fausga.com/" title="Romance Author Website Design" class="footer-link">Romance Author Website Design</a><br>
<a href="http://www.fausga.com/erotica-author-website-design/" title="Erotica Author Website Design" class="footer-link">Erotica Author Website Design</a><br>
<a href="http://www.fausga.com/" title="Website Design for Authors" class="footer-link">Website Design for Authors</a><br>
</div>

</div>

<div class="" style="margin-bottom:51px">
<div align="center" style="margin-top:30px;"><img src="http://www.fausga.com/wp-content/uploads/badge-185x185-partner.png">
<br>
Member of The Alliance of Independent Authors
</div>
</div>

<div style="display:none"><?php echo do_shortcode('[frontpage_news widget="3005" name="Latest Blog Posts"]');?></div>

<div id="recentPosts">
<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<div class="recentPost">
<?php the_post_thumbnail( 'full' ); ?>
<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
<?php the_excerpt(__('(more…)')); ?>
</div>
<?php 
endwhile;
wp_reset_postdata();
?>
</div>

<div class="grid col-300 fit" id="linksFooterRight" style="display:none">
<div id="booklinks">
<h4><a href="http://www.fausga.com/book-cover-design/" style="color:#bcbcbc" title="professional book cover design">Book Cover Design</a></h4>
<a href="http://www.fausga.com/ebook-cover-design/" title="ebook cover design" class="footer-link">Ebook Cover Design</a><br>
<a href="http://www.fausga.com/book-cover-design/" title="novel cover design" class="footer-link">Novel Cover Design</a><br>
<a href="http://www.fausga.com/book-cover-design/" title="Non Fiction Book Cover Design" class="footer-link">Non Fiction Book Cover Design</a><br>
<a href="http://www.fausga.com/mystery-book-cover-design/" title="Mystery Book Cover Design" class="footer-link">Mystery Book Cover Design</a><br>
<a href="http://www.fausga.com/book-cover-design/" title="Romance Book Cover Design" class="footer-link">Romance Book Cover Design</a><br>
<a href="http://www.fausga.com/book-cover-design/" title="Science Fiction Book Cover Design" class="footer-link">Science Fiction Book Cover Design</a><br>
<a href="http://www.fausga.com/book-cover-design/" title="Fantasy Book Cover Design" class="footer-link">Fantasy Book Cover Design</a><br>
</div>
</div>

</div>
</div>


<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>


	<div id="footer-wrapper">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid col-940">

			<div class="grid col-540">
				<?php if( has_nav_menu( 'footer-menu', 'responsive' ) ) {
					wp_nav_menu( array(
						'container'      => '',
						'fallback_cb'    => false,
						'menu_class'     => 'footer-menu',
						'theme_location' => 'footer-menu'
					) );
				} ?>
			</div><!-- end of col-540 -->

			<div class="grid col-380 fit">
				<?php echo responsive_get_social_icons() ?>
			</div><!-- end of col-380 fit -->

		</div><!-- end of col-940 -->
		<?php get_sidebar( 'colophon' ); ?>

		<div class="grid col-300 copyright">
			<?php esc_attr_e( '&copy;', 'responsive' ); ?> <?php echo date( 'Y' ); ?><a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</div><!-- end of .copyright -->

		<div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>

		<div class="grid col-300 fit powered">
			Website Design by <a href="http://www.fausga.com/">FAUSGA</a>
		</div><!-- end .powered -->

	</div><!-- end #footer-wrapper -->

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</div>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 988923550;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/988923550/?guid=ON&amp;script=0"/>
</div>
</noscript>

<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script>
 WebFont.load({
    google: {
      families: ['Roboto:500']
    }
  });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105689241-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>