		</div>
		<!-- End Main Content Container -->
		
		<footer>
			
			<div class="menus">
				<?php simple_menu('footer');
				simple_menu('social-media'); ?>
			</div>
			
			<?php $copyrightText = get_field('footer_copyright_text', 'option')?>
			
			<p class="copyright"><?php echo $copyrightText ? $copyrightText : '';?> &copy; 2011-<?php echo date('Y'); ?></p>
			
		</footer>
		
		<?php wp_footer(); ?>
		
	</body>
</html