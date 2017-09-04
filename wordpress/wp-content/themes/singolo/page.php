<?php get_header(); ?>

<!-- Slider
		============================= -->
	<div id="slider" class="theme-default">
        <div class="inner">
			
        	<!--<div class="nivo-slider nivoSlider">-->
            <div class="">
                <a href=""><img src="<?php the_field('slide_1'); ?>" alt="#" /></a>
                <!--<img src="<?php the_field('slide_2'); ?>" alt="#" />-->
            </div>
                
        </div><!-- .inner -->
	</div><!-- #slider -->
	<!-- End Slider -->

	<!-- Services
		============================= -->
	<div id="services">
        <div class="inner">
        
        	<h2><?php the_field('titulo'); ?></h2>
            <h3><?php the_field('descripcion'); ?></h3>
            
            <ul>
            	<li>
                
                	<span class=""><i class="fa <?php the_field('icono_1'); ?>" aria-hidden="true"></i></span>
                    <h4><?php the_field('servicio_1'); ?></h4>
                    <p><?php the_field('descripcion_servicio_1'); ?></p>
                </li>
                
                
                <li>
                	<span class="fa <?php the_field('icono_2'); ?>"></span>
                    <h4><?php the_field('servicio_2'); ?></h4>
                    <p><?php the_field('descripcion_servicio_2'); ?></p>
                </li>
                
                
                <li>
                	<span class="fa <?php the_field('icono_3'); ?>"></span>
                    <h4><?php the_field('servicio_3'); ?></h4>
                    <p><?php the_field('descripcion_servicio_3'); ?></p>
                </li>
                
                
                <li>
                	<span class="fa <?php the_field('icono_4'); ?>"></span>
                    <h4><?php the_field('servicio_4'); ?></h4>
                    <p><?php the_field('descripcion_servicio_4'); ?></p>
                </li>
                
                
                <li>
                	<span class="fa <?php the_field('icono_5'); ?>"></span>
                    <h4><?php the_field('servicio_5'); ?></h4>
                    <p><?php the_field('descripcion_servicio_5'); ?></p>
                </li>
                
                
                <li>
                	<span class="fa <?php the_field('icono_6'); ?>"></span>
                    <h4><?php the_field('servicio_6'); ?></h4>
                    <p><?php the_field('descripcion_servicio_6'); ?></p>
                </li>
            </ul>
            
        </div><!-- .inner -->
	</div><!-- #services -->
	<!-- End Services -->

	<!-- Portfolio
		============================= -->
	<div id="portfolio">
        <div class="inner">
        
        	<h2>Portfolio</h2>
            <h3>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h3>
            
            <!-- Portfolio Menu -->
            <ul class="portfolio-menu filter">
            	<li class="current all"><a href="#">All</a></li>
                <li class="webdesign"><a href="#">Web Design</a></li>
                <li class="graphicdesign"><a href="#">Graphic Design</a></li>
                <li class="artwork"><a href="#">Artwork</a></li>
            </ul><!-- .portfolio-menu -->
            
            <!-- Portfolio -->
            <ul class="portfolio">
            	<li data-id="id-1" data-type="webdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_1'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-2" data-type="graphicdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_2'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-3" data-type="webdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_3'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-4" data-type="artwork">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_4'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-5" data-type="graphicdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_5'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-6" data-type="artwork">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_6'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-7" data-type="webdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_7'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-8" data-type="graphicdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel=<img src="<?php the_field('thumbnails_9'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-9" data-type="artwork">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_9'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-10" data-type="graphicdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_10'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-11" data-type="webdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_11'); ?>" alt="
						" />
                    </a>
                </li>
                
            	<li data-id="id-12" data-type="artwork">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php the_field('thumbnails_12'); ?>" alt="
						" />
                    </a>
                </li>
                
            </ul><!-- .portfolio -->
            
        </div><!-- .inner -->
	</div><!-- #portfolio -->
	<!-- End Portfolio -->
    
    
	<!-- About
		============================= -->
	<div id="about">
        <div class="inner">
        
        	<!-- Title -->
        	<h2><?php the_field('titulo_1'); ?></h2>
            
            <!-- Short Description -->
            <h3><?php the_field('parrafo_1'); ?></h3>
            
            <!-- Profile -->
            <ul>
            	<li>
					<img src="<?php the_field('imagen_1'); ?>" alt="
						" />
                    <h4><?php the_field('nombre_persona'); ?></h4>
                    <p><?php the_field('acerca_del_miembro_1'); ?></p>
                     <a href=""><span class="fa <?php the_field('red_social_1'); ?>"></span></a>
                    <a href=""><span class="fa <?php the_field('red_social_2'); ?>"></span></a>
                    <a href=""><span class="fa <?php the_field('red_social_3'); ?>"></span></a>
                    <a href=""><span class="fa <?php the_field('red_social_4'); ?>"></span></a>
                </li>
                
            	<li>
					<img src="<?php the_field('imagen_miembro_2'); ?>" alt="
						" />
                    <h4><?php the_field('nombre_miembro_2'); ?></h4>
                     <p><?php the_field('acerca_de_la_persona_2'); ?></p>
                     <a href=""><span class="fa <?php the_field('red_social_1'); ?>"></span></a>
                    <a href=""><span class="fa <?php the_field('red_social_2'); ?>"></span></a>
                    <a href=""><span class="fa <?php the_field('red_social_3'); ?>"></span></a>
                    <a href=""><span class="fa <?php the_field('red_social_4'); ?>"></span></a>
                </li>
                
            	<li>
                	<img src="<?php the_field('imagen_miembro_3'); ?>" alt="
						" />
                    <h4><?php the_field('nombre_miembro_3'); ?></h4>
                    <p><?php the_field('acerca_del_miembro_3'); ?></p>
                    <a href=""><span class="fa <?php the_field('red_social_1'); ?>"></span></a>
                    <a href=""><span class="fa <?php the_field('red_social_2'); ?>"></span></a>
                    <a href=""><span class="fa <?php the_field('red_social_3'); ?>"></span></a>
                    <a href=""><span class="fa <?php the_field('red_social_4'); ?>"></span></a>
                </li>
                </li>
                
            </ul><!-- .portfolio-menu -->
            
        </div><!-- .inner -->
	</div><!-- #about -->
	<!-- End About -->
    
    
	<!-- Contact
		============================= -->
	<div id="contact">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>Get a Quote</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                	<form>
                    	
                        <?php
                            echo do_shortcode('[contact-form-7 id="71" title="Contact form"] ');
                        ?>
                    </form>
                </li>
                
                <li>
                	<h4>Contact Information</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis.</p>
                    
                    <span><i class="fa fa-map-marker "></i>Elm St. 14/05 Lost City </span>
                    <span><i class="fa fa-phone"></i>03528 331 86 35 </span>
                    <span><i class="fa fa-envelope"></i>info@singolo.com</span>
                </li>
            </ul>
            
            
        </div><!-- .inner -->
	</div><!-- #contact -->
	<!-- End Contact -->
    
<?php get_footer(); ?>