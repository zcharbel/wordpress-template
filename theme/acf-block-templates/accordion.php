<?php
// accordion is driven by boostrap v5.?>

<?php $section = 1;

if( have_rows('accordion') ): ?>
	<div class="block accordion-list">

	<?php while( have_rows('accordion') ): the_row();

		// vars
		$title = get_sub_field('card_title');
		$content = get_sub_field('card_content');?>

		<div class="accordion"><?php echo $title; ?></div>
		<div class="panel">
			<?php echo $content; ?>
		</div>
	<?php
		$section++;
	endwhile; ?>
	</div>
	
	<script type="application/javascript">
		$( document ).ready(function() {
			  var acc = document.getElementsByClassName("accordion");
			  var i;
			  
			  for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function() {
				  this.classList.toggle("active");
				  var panel = this.nextElementSibling;
				  if (panel.style.display === "block") {
					panel.style.display = "none";
				  } else {
					panel.style.display = "block";
				  }
				});
			  }
		  });
	</script>

<?php else :?>
	<h1>Please add items to the accordion.</h1>
<?php endif; ?>
