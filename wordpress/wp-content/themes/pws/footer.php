<section class="section section-footer">
		<div class="container">
			<div class="row justify-content-between align-items-start">
					<div class="col-auto columninfo">
						<a href="<?=get_site_url()?>"><i class="i i-logo"></i></a>
						AGIS MANAGMENT GROUP Sp. Z O. O.<br/>
						ul. Świętojańska 51/1<br/>
						81-391 Gdynia
						NIP: 588 240 39 60<br/>
						REGON: 222078510
					</div>
					<div class="col column-center">
				        <?php
				        wp_nav_menu(array(
				            'theme_location' => 'main_menu',
				            'menu_id' => '',
				            'container' => 'ul',
				        ));
				        ?>
					</div>
					<div class="col-auto">
						<a href="#"><i class="i i-fb"></i></a>
						<a href="#"><i class="i i-inst"></i></a>
						<a href="#"><i class="i i-linked"></i></a>
					</div>
			</div>
			<div class="row copyright">
				<div class="col">© 2022 AGIS FM. All Rights Reserved.</div>
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