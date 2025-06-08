<?
	include(locate_template('header.php'));
	
?>

	<div class="container">
		<div class="row">
			<div class="col">
				
				<section class="section simple-header" id="block_812033344a34101d85916ce5478a2f61">
					<div class="container">
						<div class="row row-wrapper visible fade-in-down" style="background-image: url('//128.204.219.15:4172/wp-content/uploads/2022/10/giant-building-with-the-sun-above-1.jpg')" data-animation="fade-in-down" data-animation-delay="400">
							<div class="col-12">
								<h1 data-animation="fade-in-down" data-animation-delay="600" class="visible fade-in-down"><?=get_the_title()?></h1>
								<h2 data-animation="fade-in-down" data-animation-delay="800" class="visible fade-in-down"><?=get_field('lokalizacja')?></h2>
							</div>
					    </div>
					</div>
				</section>

				<?
					the_content();	
				?>
			</div>
		</div>
	</div>

<?
	include(locate_template('footer.php'));
?>