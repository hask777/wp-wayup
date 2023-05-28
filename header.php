<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wayup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Подключение svg -->
	<div class="svg-placeholder" style="display: none;"></div>
	<script>document.querySelector('.svg-placeholder').innerHTML = SVG_SPRITE;</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); global $wayup_options;?>


<!-- Header -->
<?php
 
$class_header = '';
if(is_page_template('template-home.php'))
	{
		$class_header =  'header-home';
	} else {
		$class_header = 'header-inner';
	};
?>

<header class="header <?php echo esc_attr($class_header); ?>" 
<?php if(is_page_template('template-home.php'))
{?>
	style="background: #fff url(<?php echo get_template_directory_uri(). '/assets/img/bg.jpg'; ?>) no-repeat center top/ cover;"
<?}?>
>
	<div class="heading">
		<!-- Social section -->
		<?php get_template_part( 'template-parts/header/social' ); ?>
		<!-- Cart And Lang -->
		<div class="heading__block">
			<?php get_template_part( 'template-parts/header/cart' ); ?>
			<?php get_template_part( 'template-parts/header/lang' ); ?>
		</div>
		<!-- Authorization -->
		<?php get_template_part( 'template-parts/header/auth' ); ?>
	</div>

	<?php get_template_part( 'template-parts/header/nav' ); ?>
	<?php get_template_part( 'template-parts/header/offer' ); ?>
	
	
</header><!-- End header -->


