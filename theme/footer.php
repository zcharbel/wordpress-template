		</div>
		<!-- End Main Content Container -->

		<footer>
			
			<div class="menus">
				<?php simple_menu('footer');
				simple_menu('social-media'); ?>
			</div>
			
			<p class="copyright">Zach Charbel &copy; 2011-<?php echo date('Y'); ?></p>
			
		</footer>
		
		<div class="gdpr-banner">
			<div class="banner">
				<div class="text">
					<?php the_field('gdpr_text', 'option')?>
				</div>
				<a href="#" class="btn">Close Banner</a>
			</div>
		</div>

		<?php wp_footer(); ?>

    </body>
</html>