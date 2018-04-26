
<footer>

	<?php
	$args = array(
		'theme_location'=> 'header-menu',
		'container' => 'nav',
		'after' => '<span class="separator"> | </span>'

	);
	wp_nav_menu($args);
	?>
	<div class="location">
		<p>Angeles Pampangga</p>
		<p>09173260429</p>
		</div>
		<p class="copyright">All Right Reserved <?php echo date('Y');?></p>
		
</footer>
<!-- para may edit at customize sa page -->
<?php wp_footer(); ?>
</body>
</html>