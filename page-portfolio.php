<?php
/**
 * Template Name: Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'portfolio' ); ?>

				<?php

					$args = array(
					    'post_type' => 'project',
					    'posts_per_page' => -1,
					);
					$projects = new WP_Query( $args );

				?>

				<div class="projects">

					<?php if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post(); ?>

						<?php

							$image = get_field('image');

						?>

						<div class="projects-project">



							<a href="<?php the_permalink(); ?>">

								<h3 class="projects-project-title"><?php the_title(); ?></h3>

								<div class="projects-image">

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

								</div>

							</a>

						</div>

					<?php endwhile; endif; wp_reset_postdata(); ?>

				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
