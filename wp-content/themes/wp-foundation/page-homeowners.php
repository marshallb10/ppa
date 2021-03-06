<?php
/*
Template Name: HomeOwners
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix">
            
            	<?php get_sidebar(); // sidebar 1 ?>
			
				<div id="main" class="nine columns clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					

					<?php endwhile; ?>	
					
					<?php else : ?>

					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>