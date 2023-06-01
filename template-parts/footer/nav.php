<?php global $wayup_options; ?>

<?php if($wayup_options['footer_menu_title']){?>
<nav class="guide">
	<p class="guide__title"><?php echo $wayup_options['footer_menu_title']; ?></p>

	<?php
		wp_nav_menu(array(
			'theme_location' => 'menu-footer-1',
			'menu_id' => 'footer-menu-1',
		));
	?>
</nav>
<?}?>