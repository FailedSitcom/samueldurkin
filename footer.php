<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package samueldurkin
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<script>
jQuery( ".project-toggle" ).click(function() {
	jQuery(this).next(".project-content").slideToggle();
	jQuery( ".project-toggle" ).hide();
});

jQuery( ".back-button" ).click(function() {
	jQuery(".project-content").hide();
	jQuery( ".project-toggle" ).show();
});

jQuery('.project-image-thumb img').click(function() {
		var loc = jQuery(this).attr("src");
		jQuery(this).closest(".project-images").find('.project-image img').attr("src", loc);
});


</script>
