<section id="footer" class="section section-footer">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto">
					<div class="d-flex align-items-center gap social">
						<a target="_blank" class="social" href="{{ fields.facebook_url }}"><i class="i-facebook-f"></i></a>
						<a target="_blank" class="social" href="{{ fields.twittter_url }}"><i class="i-twitter"></i></a>
						<a target="_blank" class="social" href="{{ fields.instagram_url }}"><i class="i-instagram"></i></a>
						<a target="_blank" class="social" href="{{ fields.youtube_url }}"><i class="i-youtube"></i></a>
					</div>
				</div>

				<div class="col-auto">
					<img class="red-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/PWS-web-footer-logo.png" alt="pws red logo" />
				</div>
					<!-- <div class="col column-center">
				        <?php
				        wp_nav_menu(array(
				            'theme_location' => 'main_menu',
				            'menu_id' => '',
				            'container' => 'ul',
				        ));
				        ?>
					</div> -->
			</div>
			<div class="row copyright pt-5 ">
				<div class="col">Copyright © 2007 - 2025 Primary Weapon Systems
</div>
			</div>
		</div>
</section>

</div>

    <nav id="menu">
        <ul>
	        <?php
	        wp_nav_menu(array(
	            'theme_location' => 'main_menu',
	            'menu_id' => '',
	            'container' => 'ul',
	            'items_wrap' => '%3$s'
	        ));
	        ?>
        </ul>
    </nav>
    
<?php wp_footer(); ?>
	<script>
/*
	var menuButton = document.getElementById('menuButton');
	menuButton.addEventListener('click', function (e) {
	    menuButton.classList.toggle('is-active');
	    jQuery('.minmenu').slideToggle();
	    e.preventDefault();
	});
*/
	</script>
	
</body>
</html>