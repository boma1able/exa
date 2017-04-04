<?php

if ( ! defined('FW') ){
    die('Forbidden');
}

//$options = array(
//    'main' => array(
//        'type' => 'box',
//        'title' => __('Testing Options', '{domain}'),
//        'options' => array(
//            'body-color' => array(
//                'type' => 'color-picker',
//                'label' => __('Body Color', '{domain}'),
//                'value' => '#fff',
//            ),
//        ),
//    ),
//);

$options = array(
    array(
        'type'    => 'box',
        'options' => array('box_id' => array(
            'type' => 'box',
            'options' => array(
                'option_id'  => array( 'type' => 'text' ),
            ),
            'title' => __('Box Title', '{domain}'),
            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),

            /**
             * When used in Post Options on the first array level
             * the ``box`` container accepts additional parameters
             */
            //'context' => 'normal|advanced|side',
            'priority' =>  'high'  //'default|high|core|low',
        ),)
    ),
    'main' => array(
        'type' => 'box',
        'title' => __('Testing Options', '{domain}'),
        'options' => array(
            'body-color' => array(
                'type' => 'color-picker',
                'label' => __('Body Color', '{domain}'),
                'value' => '#fff',
            ),
        ),
    ),
    'tab_id' => array(
        'type'  => 'switch',
        'value' => 'hello',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'left-choice' => array(
            'value' => 'goodbye',
            'label' => __('Goodbye', '{domain}'),
        ),
        'right-choice' => array(
            'value' => 'hello',
            'label' => __('Hello', '{domain}'),
        ),
    ),
    'tab_id_2' => array(
        'type' => 'tab',
        'options' => array(
            'option_id_2'  => array( 'type' => 'text' ),
        ),
        'title' => __('Tab Title #2', '{domain}'),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),

    ),
    'popup_id' => array(
    'type' => 'popup',
    'options' => array(
        'option_id'  => array( 'type' => 'text' ),
    ),
    'title' => __('Button and Popup Title', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    'modal-size' => 'small', // small, medium, large
    'desc' => __('Button Description', '{domain}'),
),
);
