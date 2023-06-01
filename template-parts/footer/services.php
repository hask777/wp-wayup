<?php global $wayup_options; ?>

<?php if($wayup_options['footer_services_title']){?>
<div class="serv">
	<p class="serv__title"><?php echo $wayup_options['footer_services_title']; ?> </p>
	<?php
		wp_nav_menu(array(
			'theme_location' => 'menu-footer-2',
			'menu_id' => 'footer-menu-1',
			'container' => ''
		));
	?>
</div>

<?}?>