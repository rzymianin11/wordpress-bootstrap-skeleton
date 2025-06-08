<?
	/*
		Template name: Projekty
	*/
	
	include(locate_template('header.php'));

	$query = new WP_Query(array(
	    'post_type' => 'project',
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
		
		<div class="grid">
				<div class="grid-sizer"></div>
				<?php 
				while ($query->have_posts()) {
				    $query->the_post();
						$thumb = get_the_post_thumbnail_url($post, 'maxviewport');
				?>
				<div class="grid-item">
					<a data-fslightboxOpen href="#">
						<img src="<?=$thumb?>" alt="<?=get_the_title()?>" />
						<div class="title">
							<?php
								the_title();	
							?>
						</div>
						<div class="gallery">
							<? if(is_array(get_field('galeria'))): ?>
								<?
									foreach(get_field('galeria', $post) as $g){
										echo '<img src="'.$g['sizes']['maxviewport'].'" alt="" />';		
									}
								?>
							<? else: ?>
								<? echo '<img src="'.$thumb.'" alt="" />'; ?>
							<? endif; ?>
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