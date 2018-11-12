<?php /*
Template Name: Pradinis
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<div class="rte">
                        <?php the_content(); ?>
					</div>
				</div>
			</div>
         <div class="slider-block">
                <div class="owl-carousel owl-theme animal">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/wolf1.jpg" alt="<?php bloginfo('name'); ?>">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/dog.jpg" alt="<?php bloginfo('name'); ?>">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/bird1.jpg" alt="<?php bloginfo('name'); ?>">

                </div>
            </div>
		</div>
	</div>
				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>