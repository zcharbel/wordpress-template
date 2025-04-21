		</div>
		<!-- End Main Content Container -->
		
		<div class="popup">
			<div class="popup-content">
				
				<div class="close-btn"></div>
			</div>
		</div>
		
		<footer>
			<div class="container">
				<div class="menus">
					<?php simple_menu('footer'); ?>
				</div>
				
				<?php $copyrightText = get_field('footer_copyright_text', 'option')?>
				
				<p class="copyright"><?php echo $copyrightText ? $copyrightText : '';?> &copy; <?php echo date('Y'); ?></p>
			</div>
		</footer>
		
		<?php wp_footer(); ?>
		
	</body>
</html