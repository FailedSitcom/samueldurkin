<?php
/**
 * Template Name: About
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="section">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'about' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div>

			<div class="projects-section">

			<h3 class="entry-title" id="projects">Projects</h3>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						$args = array(
						    'post_type' => 'project',
						    'posts_per_page' => -1,
						);
						$projects = new WP_Query( $args );

					?>


					<div class="projects">
					<ul>
						<?php if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post(); ?>

							<?php

								$image = get_field('image');

								$image_1 = get_field('image_1');
								$image_2 = get_field('image_2');
								$image_3 = get_field('image_3');

							?>

								<li class="project-toggle">
									<a href="#projects">
										<div class="project-tab">
											<img src="<?php echo $image_1['sizes']['project-full']; ?>" alt="<?php echo $image_1['alt']; ?>" />
										</div>
									</a>
								</li>

								<div class="project-content">
									<h4><?php the_title(); ?></h4>
									<div class="project-website">

										<a href="http://<? echo the_field('website') ?>"><?php the_field('website') ?></a>

									</div>

									<div class="project-images">

										<div class="project-image-thumbs">
											<div class="project-image-thumb">

												<img src="<?php echo $image_1['sizes']['large']; ?>" alt="<?php echo $image_1['alt']; ?>" />

											</div>

											<div class="project-image-thumb">

												<img src="<?php echo $image_2['sizes']['large']; ?>" alt="<?php echo $image_2['alt']; ?>" />

											</div>

											<div class="project-image-thumb">

										  	<img src="<?php echo $image_3['sizes']['large']; ?>" alt="<?php echo $image_3['alt']; ?>" />

											</div>
										</div>

										<div class="project-image">

											<img src="<?php echo $image_1['sizes']['large']; ?>" alt="<?php echo $image_1['alt']; ?>" />

										</div>



									</div>

									<div class="project-keywords">

										<p><?php the_field('keywords') ?></p>

									</div>

									<div class="project-description">

										<?php the_content(); ?>

									</div>

									<span class="back-button"><a href="#projects">All Projects</a></span>

								</div>


						<?php endwhile; endif; wp_reset_postdata(); ?>
						</ul>

					</div>

				</div>



					<h3 class="entry-title" id="contact">Contact</h3>

				<div class="contact-content">

					<?php
						$page = get_page_by_title( 'contact' );
						$content = apply_filters('the_content', $page->post_content);
						echo $content;
					?>
					<div class="contact-icons">

						<a href="mailto:sam.thomas.durkin@gmail.com"><i class="fa fa-envelope-o fa-3x"></i></a>
						<a href="http://www.github.com/failedsitcom"><i class="fa fa-github-square fa-3x"></i></a>
						<a href="http://www.twitter.com/samthomasdurkin"><i class="fa fa-twitter-square fa-3x"></i></a>
						<a href="https://uk.linkedin.com/in/samueldurkin"><i class="fa fa-linkedin-square fa-3x"></i></a>

					</div>

				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
