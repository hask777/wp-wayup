<?php global $wayup_options; ?>
<!-- Footer -->
<footer class="footer">
	<div class="wrapper">
		<div class="footer__block">
			<!-- Logo -->
			<?php get_template_part( 'template-parts/universal/logo' ); ?>

			<!-- Social section -->
			<?php get_template_part( 'template-parts/header/social' ); ?>

			<!-- <p class="footer__special">Разработано специально для коучинга WAYUP</p> -->
			
		</div>
		<!-- Footer Nav -->
		<?php get_template_part( 'template-parts/footer/nav' ); ?>
		<!-- Services -->
		<?php get_template_part( 'template-parts/footer/services' ); ?>
		<!--  Contacts -->
		<?php get_template_part( 'template-parts/footer/contacts' ); ?>
		<!-- Subscription -->
		<?php get_template_part( 'template-parts/footer/subscribe' ); ?>
		<!-- Copyright -->
		<?php get_template_part( 'template-parts/footer/copyright' ); ?>
	</div>

</footer><!-- End footer -->



<!-- MODAL WINDOWS-->
<?php get_template_part( 'template-parts/footer/modals/modals' ); ?>

<?php wp_footer(); ?>
</body>

</html>