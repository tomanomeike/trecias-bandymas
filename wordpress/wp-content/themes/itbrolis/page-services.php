<?php /*
Template Name: Paslaugos
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <?php
                $i = 0;
                $args = array( 'post_type' => 'paslauga', 'posts_per_page' =>4 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                            <?php the_post_thumbnail('third-size'); ?>
                            <div class="aprasymas">
                                <?php the_content(); ?>
                            </div>
                        </a>
                    </div>
                    <?php $i++; endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>