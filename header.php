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
<?php wp_body_open(); ?>

<!-- Header -->
<header class="header header-home" style="background: #fff url(<?php echo get_template_directory_uri(). '/assets/img/bg.jpg'; ?>) no-repeat center top/ cover;">
	<div class="heading">
		<ul class="social">
			<li class="social__item">
				<span>Vk</span>
				<a class="social__icon social__icon_vk" href="#">
					<svg width="21" height="18">
						<use xlink:href="#vk" />
					</svg>
				</a>
			</li>
			<li class="social__item">
				<span>Fb</span>
				<a class="social__icon social__icon_fb" href="#">
					<svg width="14" height="17">
						<use xlink:href="#facebook" />
					</svg>
				</a>
			</li>
			<li class="social__item">
				<span>Tw</span>
				<a class="social__icon social__icon_tw" href="#">
					<svg width="18" height="15">
						<use xlink:href="#twitter" />
					</svg>
				</a>
			</li>
			<li class="social__item">
				<a class="social__icon social__icon_inst" href="#">
					<svg width="16" height="16">
						<use xlink:href="#instagram" />
					</svg>
				</a>
			</li>
		</ul>
		<div class="heading__block">
			<a href="cart.html" class="heading__bag">
				<svg width="17" height="20">
					<use xlink:href="#bag" />
				</svg>
			</a>
			<div class="language">
				<ul>
					<li class="lang-item active">
						<a href="#">Ru</a>
					</li>
					<li class="lang-item">
						<a href="#">En</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="control">
			<a href="#enter" class="control__enter popup-link-1">
				<svg class="control__icon" width="19" height="17">
					<use xlink:href="#login" />
				</svg>
				Вход
			</a>
			<a style="display: none;" href="cabinet.html" class="control__enter control__enter_cab">
				<svg class="control__icon" width="16" height="16">
					<use xlink:href="#user" />
				</svg>
				Личный кабинет
			</a>
			<a href="#reg" class="control__reg noise popup-link-2">Регистрация</a>
		</div>
	</div>

	<div class="navigation">
		<div class="logo noise">
			<p class="logo__icon"><?php bloginfo( 'name' ); ?></p>
			<p class="logo__desc"><?php bloginfo( 'description' ); ?></p>
		</div>

		<div class="navigation__wrap">
			<a href="#call" class="call popup-link-1">
				<div class="call__icon btn">
					<svg width="22" height="22">
						<use xlink:href="#phone-solid" />
					</svg>
				</div>
				<div class="call__block">
					<p class="call__text">Заказать звонок</p>
					<p class="call__number">+ 7 (495) 567-28-15</p>
				</div>
			</a>

			<!-- Main menu -->
			<nav id="nav-wrap" class="menu">

				<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
				<a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

				<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-header',
						'menu_id' => 'nav',
						'menu_class' => 'menu__list',
						'container' => ''
					));
				?>

				<!-- <ul id="nav" class="menu__list">
					<li class="active"><a href="index.html">Главная</a></li>
					<li><a href="about.html">О компании</a></li>
					<li><span><a href="services.html">Услуги</a></span>
						<ul>
							<li><a href="service.html">Корпоративная практика, M&A</a></li>
							<li><a href="service.html">Интеллектуальная собственность</a></li>
							<li><a href="service.html">Интернет-бизнес и цифровая экономика</a></li>
							<li><a href="service.html">Информационные технологии / TMT</a></li>
							<li><a href="service.html">Government Relations</a></li>
							<li><a href="service.html">Коммерческая практика</a></li>
						</ul>
					</li>
					<li><a href="reviews.html">Отзывы</a></li>
					<li><a href="contacts.html#">Контакты</a></li>
					<li><a href="market.html">Магазин</a></li>
				</ul> -->
			</nav><!-- End main menu -->

			<div class="widget widget_search">
				<form role="search" method="get" id="searchform" action="#">

					<input class="text-search" type="search" value="" placeholder="Поиск">
					<input type="submit" class="submit-search" value="" />

				</form>
			</div>
		</div>

	</div>
	<div class="offer">
		<div class="wrapper">
			<div class="offer__slider">
				<div class="offer__slide">
					<p class="offer__text">Вы хотите изменить мир.</p>
					<h1 class="offer__title">Мы хотим вам помочь.</h1>
					<p class="offer__descr">Мы современная Юридическая фирма,<br> помогающая перспективным стартапам,
						фрилансерам и малому бизнесу.</p>
					<a href=contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
				</div>
				<div class="offer__slide">
					<p class="offer__text">Вы хотите изменить мир.</p>
					<h1 class="offer__title">Мы хотим вам помочь.</h1>
					<p class="offer__descr">Юристы JC проведут вас и вашу компанию через многочисленные юридические
						проблемы, стоящие перед компаниями Москвы сегодня.</p>
					<a href="contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
				</div>
				<div class="offer__slide">
					<p class="offer__text">Вы хотите изменить мир.</p>
					<h1 class="offer__title">Мы хотим вам помочь.</h1>
					<p class="offer__descr">Мы предпочитаем обсуждать проблемы и решения, а не участвовать в
						теоретических юридических дебатах, которые никогда не заканчиваются.</p>
					<a href="contacts.html#callback" class="offer__btn btn">Бесплатная консультация</a>
				</div>
			</div>

			<a class="offer__video popup-with-zoom-anim popup-youtube"
				href="https://www.youtube.com/watch?v=FWxRRbnwRf0" rel="nofollow">
				<p class="offer__time">1:30</p>
				<div class="offer__play"></div>
				<p class="offer__watch">Посмотрите короткое видео о нашей компании</p>
			</a>
		</div>
	</div>
</header><!-- End header -->


