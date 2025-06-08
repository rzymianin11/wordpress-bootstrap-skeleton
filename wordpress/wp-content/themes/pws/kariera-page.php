<?
	/*
		Template name: Kariera
	*/
	
	include(locate_template('header.php'));

	$query = new WP_Query(array(
	    'post_type' => 'oferty-pracy',
	    'post_status' => 'publish',
	    'posts_per_page' => -1
	));
?>

	<div class="container projects-wrapper">
		<div class="row">
			<div class="col-12">
							<?php
								the_content();	
							?>
			</div>
		</div>
		
			<?php 
			while ($query->have_posts()) {
			    $query->the_post();
					$thumb = get_the_post_thumbnail_url($post, 'maxviewport');
			?>
				<div class="row stanowisko">
		
						<div class="col-5">
								<img src="<?=$thumb?>" alt="<?=get_the_title()?>" />
						</div>
						<div class="col-7">
							<div class="title">
								<h2><?php
									the_title();	
								?></h2>
								<h3><?=get_field('opis_stanowiska')?></h3>
								<h5><?=get_field('lokalizacja')?></h5>
								<a href="<?=get_permalink()?>" target="_blank"><?=__('Sprawdź ofertę')?></a>
							</div>
						</div>
				</div>
			<?php
			
			}
			wp_reset_query();
			
			?>

	</div>

<?
	include(locate_template('footer.php'));
?>