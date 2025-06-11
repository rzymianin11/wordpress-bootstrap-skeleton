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
    	<div class="page-wrapper"> 
<header id="page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-auto">
				<div class="logo">
					<a href="/"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="logo"></a>
				</div>
			</div>
			<div class="col-auto ml-auto right-header">
				<div class="search">
					<?php
						get_search_form(array(
							'placeholder' => 'Search for...'
						));
					?>
				</div>
				<?php
					wp_nav_menu(
						array('menu' => 'main-menu',
							'container' => '' 
						)
					);
				?>
			</div>			
		</div>
	</div>
</header>