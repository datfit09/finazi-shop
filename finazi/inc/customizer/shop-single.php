<?php// Add shop-single section.$wp_customize->add_section(    'shop_single',    array(        'title'    => __( 'Shop single', 'finazi' ),        'priority' => 30,    ));// Add sidebar page single product.$wp_customize->add_setting(    'shop_single_sidebar',    array(        'type'       => 'option', // 'option' || 'theme_mod        'capability' => 'edit_theme_options',        'section'    => 'shop_single',        'default'    => 'full',    ));// Add sidebar page single product control.$wp_customize->add_control(    new WP_Customize_Control(        $wp_customize,        'shop_single_sidebar',        array(                'label'    => __( 'Sidebar', 'finazi' ),                'section'  => 'shop_single',                'settings' => 'shop_single_sidebar',                'type'     => 'select',                'choices'  => array(                'left'     => __( 'Left', 'finazi' ),                'right'    => __( 'Right', 'finazi' ),                'full'     => __( 'No Sidebar', 'finazi' ),            )        )    ));