<?php if( have_rows('packages_option', 'option') ): ?>
	<div class="block block-packages">
		<div class="container two-columns">
					
			<?php while( have_rows('packages_option', 'option') ): the_row(); 
		
				// vars
				$title = get_sub_field('title'); 
				$price = get_sub_field('pricing');
				$description = get_sub_field('description');?>
				
				<div class="package column">
					<h3><?php echo $title; ?></h3>
					<h4>Starting at <?php echo $price; ?></h4>
					<?php echo $description; ?>
				</div>
		
			<?php endwhile; ?>
		</div> <!-- end .container -->
	</div> <!-- end .block-packages -->

<?php else :
	
	// no rows found
		
	echo "Doesn't Work";
	
endif; ?>