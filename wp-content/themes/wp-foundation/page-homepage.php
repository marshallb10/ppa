<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="main" class="twelve columns" role="main">



						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<section class="row post_content">

							<div class="home-main eight columns">

								<?php the_content(); ?>

							</div>

							<?php get_sidebar('sidebar2'); // sidebar 2 ?>

						</section> <!-- end article header -->



					<?php
						// No comments on homepage
						//comments_template();
					?>

					<?php endwhile; ?>

					<?php else : ?>

					<?php endif; ?>

				</div> <!-- end #main -->

				<?php //get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>