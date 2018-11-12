<?php /*
Template Name: Kontaktai
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="rte">
                        <?php the_content(); ?>
					</div>
                    <div class="contacts">
                        <h6 class="kontaktai">Kontaktai</h6>
                        <p class=""><i class="fas fa-home"></i> Lorem ipsum dolor sit amet</p>
                        <p class=""><i class="fas fa-phone"></i>+342 55512237 </p>
                        <p class=""><i class="fas fa-envelope"></i> info@biolatte.ee</p>
                    </div>
                    <?php echo do_shortcode( '[contact-form-7 id="28" title="Contact form 1"]') ?>

				</div>
                <div class="col-md-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2294.271431691245!2d23.88455721586722!3d54.89815798033345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e7220570535735%3A0x2812cd75a3dc1afb!2sA.+Jak%C5%A1to+g.+6%2C+Kaunas+44275!5e0!3m2!1slt!2slt!4v1541416794510" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                 </div>
            </div>
        </div>
    </div>

				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>