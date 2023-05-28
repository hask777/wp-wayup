<?php global $wayup_options; ?>

<div class="navigation">
    <!-- Logo -->
    <?php get_template_part( 'template-parts/universal/logo' ); ?>

    <!-- Phone number -->
    <div class="navigation__wrap">
        <?php if($wayup_options['header_phone_number']){?>
            <a href="tel:<?php echo $wayup_options['header_phone_number'];  ?>" class="call popup-link-1">
                <div class="call__icon btn">
                    <svg width="22" height="22">
                        <use xlink:href="#phone-solid" />
                    </svg>
                </div>
            
                <div class="call__block">
                    <p class="call__text"><?php echo  $wayup_options['header_phone_label']; ?></p>
                    <p class="call__number"><?php echo  $wayup_options['header_phone_number']; ?></p>
                </div>
            </a>

        <?}?>

        <!-- Main menu -->
        <nav id="nav-wrap" class="menu">

            <a class="mobile-btn" href="#nav-wrap"
                title="<?php esc_html_e('Show navigation', 'wayup'); ?>"><?php esc_html_e('Show navigation', 'wayup'); ?></a>
            <a class="mobile-btn" href="#"
                title="<?php esc_html_e('Hide navigation', 'wayup'); ?>"><?php esc_html_e('Hide navigation', 'wayup'); ?></a>

            <?php
					wp_nav_menu(array(
						'theme_location' => 'menu-header',
						'menu_id' => 'nav',
						'menu_class' => 'menu__list',
						'container' => ''
					));
				?>

        </nav>
        <!-- End main menu -->

        <!-- Search Form -->
        <div class="widget widget_search">
            <?php get_search_form(); ?>
        </div>
    </div>

</div>