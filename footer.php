<?php
/**
 * Version    : 1.0.0
 * Author     : Keiju
 * Author URI : http://
 * Created    : March 24, 2016
 * Modified   : March 24, 2016
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
		<?php do_action( 'habakiri_after_contents_content' ); ?>
	<!-- end #contents --></div>
	<footer id="footer" class="footer">
		<?php do_action( 'habakiri_before_footer_content' ); ?>
		
		<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
		<div class="footer-widget-area">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer-widget-area' ); ?>
				<!-- end .row --></div>
			<!-- end .container --></div>
		<!-- end .footer-widget-area --></div>
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social-nav' ) ) : ?>
		<div class="social-nav">
			<div class="container">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'social-nav',
					'fallback_cb'    => '',
					'depth'          => 1
				) );
				?>
			<!-- end .container --></div>
		<!-- end .social-nav --></div>
		<?php endif; ?>

		<div class="copyright">
			<div class="container">
				<p>&#169; 2015 - <?php echo date('Y '); bloginfo('name'); ?> All rights reserved.</p>
			<!-- end .container --></div>
		<!-- end .copyright --></div>
	<!-- end #footer --></footer>
<!-- end #container --></div>
<?php wp_footer(); ?>
</body>
</html>