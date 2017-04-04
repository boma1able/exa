<?php

if ( ! defined('FW') ){
    die('Forbidden');
}

$options = array(
    'panel_1' => array(
        'title' => __('Unyson Panel', '{domain}'),
        'options' => array(

            'section_1' => array(
                'title' => __('Unyson Section', '{domain}'),
                'options' => array(

                    'option_1' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option', '{domain}'),
                        'desc' => __('Option Description', '{domain}'),
                    ),
                    'wp-customizer-setting-args' => array(
                        'capability' => 'edit_posts',
                    ),
                ),
            ),
            

        )
    ),
);

