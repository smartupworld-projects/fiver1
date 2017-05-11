<footer class="site-footer">
	<nav class="site-nav">
		<?php
		$fargs = array(
			'theme_location' => 'footer'
			);
		wp_nav_menu($fargs); 
		?>
	</nav>
	
	<p><?php bloginfo('name'); ?>&copy; <?php echo date('Y') ?></p>
</footer>
</div> <!-- container -->
<?php wp_footer(); ?>
</body>
</html>