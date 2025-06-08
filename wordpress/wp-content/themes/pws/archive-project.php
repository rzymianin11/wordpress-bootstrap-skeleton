<?
	include(locate_template('header.php'));

	$query = new WP_Query(array(
	    'post_type' => 'project',
	    'post_status' => 'publish',
	    'posts_per_page' => -1
	));
?>

	<div class="container">
		<div class="row">
			<div class="col-12">
				
			</div>
		</div>
		
		<div class="row grid">
				<?php 
				while ($query->have_posts()) {
				    $query->the_post();
						$thumb = get_the_post_thumbnail_url($post, 'maxviewport');
				?>
				<div class="grid-item col-sm-6 col-12">
					<a href="<?=get_permalink()?>">
						<img src="<?=$thumb?>" alt="<?=get_the_title()?>" />
						<div class="description">
							<?php
								the_content();	
							?>
						</div>
						<div class="gallery">
							
						</div>
					</a>
				</div>
				
				<?php
				
				}
				wp_reset_query();
				
				?>
			</div>
		</div>
	</div>

<?
	include(locate_template('footer.php'));
?>