<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?php wp_title('', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        
        <script type="text/javascript">
            var template_url = '<?php echo get_stylesheet_directory_uri() ?>/';
            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
        </script>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <?php wp_head(); ?>
        

    </head>
    <body <? body_class(); ?>>
    	<div  id="page">
	    	<header id="main-header" data-animation="fade-in-down">
		    	<div class="container">
			    	<div class="row">
				    	<div class="col-auto">
					    	<a href="<?=get_site_url()?>"><img src="<?=get_field('logo', 'option')['url']?>?>" alt="logo"/></a>
				    	</div>
				    	<div class="col-auto d-none d-sm-block">
					        <?php
						        wp_nav_menu(array(
						            'theme_location' => 'main_menu',
						            'menu_id' => '',
						            'container' => 'ul',
						        ));
					        ?>
				    	</div>

				    	<div class="col-auto ml-auto d-block d-sm-none">
<a href="#menu"><mm-burger
    menu="menu"
    fx="tornado"
></mm-burger></a>
				    	</div>
			    	</div>
		    	</div>
	    	</header>
