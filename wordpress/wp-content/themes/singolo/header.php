<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	
<!-- Header
		============================= -->
	<div id="header">
        <div class="inner">
        
              <!-- Logo -->
	            <a href="<?php echo esc_url( home_url('/') ); ?>">
					<img class="logotipo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"  alt="logo singolo">
				</a><!-- .logo-->

			<!-- Nav Menu -->
            <ul class="nav-menu right">	
				<?php 
					$args = array(
						'theme_location' => 'header-menu',
						'container' => 'nav',
						'container_class' => 'site-menu',
					);

					wp_nav_menu( $args );
				?>
			</ul>
        
        </div><!-- .inner -->
	</div><!-- #header -->
	<!-- End Header -->
    
			

