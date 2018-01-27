<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	<footer class="ba-footer">
		<div class="row column">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</div>
	</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<?php wp_footer(); ?>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTgzrmo9NC5L1c6M-krZlY-YuK-ECz7VU&callback=initMap"
        type="text/javascript"></script>
</body>
</html>
