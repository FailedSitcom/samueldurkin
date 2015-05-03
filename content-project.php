<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package samueldurkin
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="project-content">

			<div class="project-website">

				<?php the_field('website') ?>

			</div>

			<?php

				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');

			?>

			<div class="project-images">

				<div class="project-image">

					<img src="<?php echo $image_1['sizes']['project-full']; ?>" alt="<?php echo $image_1['alt']; ?>" />

				</div>

				<div class="project-image-thumbs">

					<img src="<?php echo $image_2['sizes']['project-thumb']; ?>" alt="<?php echo $image_2['alt']; ?>" />

				</div>

				<div class="project-image-thumbs">

					<img src="<?php echo $image_3['sizes']['project-thumb']; ?>" alt="<?php echo $image_3['alt']; ?>" />

				</div>

			</div>


			<?php the_content(); ?>

		</div>

		<div class="project-keywords">

			<p><?php the_field('keywords') ?></p>

		</div>
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
