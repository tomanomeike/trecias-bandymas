
		<?php wp_footer();?>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-block">
                            <div class="owl-carousel owl-theme logotipai">
                                <?php
                                $i = 0;
                                $args = array( 'post_type' => 'logotipas', 'posts_per_page' => 9999 );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <div class="col-md-4">
                                            <?php the_post_thumbnail('second-size'); ?>
                                            <div class="aprasymas">
                                                <?php the_content(); ?>
                                            </div>
                                        </a>
                                    </div>
                                    <?php $i++; endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="tekstas-kaireje">
                                <h6>Artiklid</h6>
                                <h7 class="zalias-tekstas">
                                    17 Nov Bakterid service huvag
                                </h7>
                                <p class="mazas-tekstas">
                                    Lorem ipsum dolor sit amet, pri at decore dictas adversarium.
                                </p>
                                <p class="mazas-zalias-tekstas">
                                    Lorem ipsum...
                                </p>
                                <h7 class="zalias-tekstas">
                                    17 Nov Bakterid service huvag
                                </h7>
                                <p class="mazas-tekstas">
                                    Lorem ipsum dolor sit amet, pri at decore dictas adversarium.
                                </p>
                                <p class="mazas-zalias-tekstas">
                                    Lorem ipsum...
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h6 class="kontaktai">Contacts</h6>
                            <p class="mazas-tekstas"><i class="fas fa-home"></i> Lorem ipsum dolor sit amet</p>
                            <p class="mazas-tekstas"><i class="fas fa-phone"></i>+342 55512237 </p>
                            <p class="mazas-zalias-tekstas"><i class="fas fa-envelope"></i> info@biolatte.ee</p>
                            <div class="input-container">
                                <input class="input-field" type="text" placeholder="user@example.com" name="email">
                                <i class="fa fa-envelope icon"></i>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="footer-apacia">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Biolatte&#169; 2014</p>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>AVALLET KKK Kontakt</p>
                        </div>
                    </div>
                </div>
            </div>
            <script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.3.1.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
        </footer>

	</body>
</html>