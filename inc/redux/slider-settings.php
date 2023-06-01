<?php

/**
 * Social Settings
 */
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Slider Home Page', 'wayup' ),
		'id'               => 'slider_home_page',
        'subsection'       => true,
		'customizer_width' => '450px',
        'desc'             => esc_html__( 'Add media files and data for header', 'wayup' ),
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
