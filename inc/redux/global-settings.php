<?php
/**
 * Gloal Settings Main Title
 */
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Global Settings', 'wayup' ),
		'id'               => 'globalsettings',
		'desc'             => esc_html__( 'Options for Header and Footer', 'wayup' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-globe',
	)
);

/**
 * Social Settings
 */
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Social Profiles', 'wayup' ),
		'id'               => 'social_profiles',
        'subsection'       => true,
		'customizer_width' => '450px',
        'desc'             => esc_html__( 'Add links profiles for Social', 'wayup' ),
		'fields'           => array(
			array(
				'id'       => 'social_sortable',
				'type'     => 'sortable',
				'title'    => esc_html__( 'Social Links', 'wayup' ),
				'subtitle' => esc_html__( 'Enter LInks For Social Networks', 'wayup' ),
				'label'    => true,
				'options'  => array(
					'Vkontakte link'   => 'vkontakte',
					'Facebook link'   => 'facebook',
					'Twitter link' => 'twitter',
                    'Instagram link'  => 'instagram',
			)
        ),
	)
));

/**
 * Contacts
 */
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Header Contact Data', 'wayup' ),
		'id'               => 'contacts',
        'subsection'       => true,
		'customizer_width' => '450px',
        'desc'             => esc_html__( 'Add contacts data', 'wayup' ),
		'fields'           => array(
			array(
				'id'       => 'header_start',
				'type'     => 'section',
				'title'    => esc_html__( 'Header Contact Data', 'wayup' ),
				'indent'   => true
		 
		),
			array(
				'id'       => 'header_phone_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Phone Label', 'wayup' ),
				'subtitle' => esc_html__( 'Enter The Phone Label', 'wayup' ),
                'default'  => esc_html__( 'Заказать звонок', 'wayup' ), 
        ),
            array(
                'id'       => 'header_phone_number',
                'type'     => 'text',
                'title'    => esc_html__( 'Header Phone Number', 'wayup' ),
                'subtitle' => esc_html__( 'Enter The Phone Number', 'wayup' ),
        ),
			array(
				'id'       => 'header_end',
				'type'     => 'section',
				'indent'   => true
		),
			array(
				'id'       => 'footer_start',
				'type'     => 'section',
				'title'    => esc_html__( 'Footer Contact Data', 'wayup' ),
				'indent'   => true
		),
			array(
				'id'       => 'footer_menu_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Services Site Map Title', 'wayup' ),
				'default'  => esc_html__( 'Карта сайта', 'wayup' ),
		),
			array(
				'id'       => 'footer_services_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Services Section Title', 'wayup' ),
				'default'  => esc_html__( 'Услуги', 'wayup' ),
		),
			array(
				'id'       => 'footer_contacts_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Contacts Section Title', 'wayup' ),
				'default'  => esc_html__( 'Контакты', 'wayup' ),
		),
			array(
				'id'       => 'footer_address',
				'type'     => 'text',
				'title'    => esc_html__( 'Enter address', 'wayup' ),
		),
			array(
				'id'       => 'footer_phone_number',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Footer phone number', 'wayup' ),
				'subtitle' => esc_html__( 'Enter One or More Phone Number', 'wayup' ),		
				'desc'     => esc_html__( 'Add or remove phone' ) 
		), 
			array(
				'id'       => 'footer_email',
				'type'     => 'text',
				'title'    => esc_html__( 'Enter valid email', 'wayup' ),
				'validate' => 'email',
				'msg'      => 'Please enter valid email',
				'default'  => '',
		),
			array(
				'id'       => 'footer_copyrights',
				'type'     => 'editor',
				'title'    => esc_html__( 'Copyrights', 'wayup' ),
				'default' => esc_html__( '©2007-2018 Все права защищены', 'wayup' ),		
				'args'     => array(

				)
		), 
			array(
				'id'       => 'footer_end',
				'type'     => 'section',
				'indent'   => true
		),

	)
));