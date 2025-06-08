<?
	/*
		Template name: Usługi
	*/
	include(locate_template('header.php'));
	
?>

	<div class="container">
		<div class="row">
			<div class="col">
				<?
					the_content();	
				?>
			</div>
		</div>
	</div>

<?
	include(locate_template('footer.php'));
?>