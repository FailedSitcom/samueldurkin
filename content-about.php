<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package samueldurkin
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h3 class="entry-title" id="about">About</h3>
	</header><!-- .entry-header -->

	<div class="about-content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'samueldurkin' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'samueldurkin' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
