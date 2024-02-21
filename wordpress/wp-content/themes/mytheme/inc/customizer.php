<?php


function mytheme_customizer($wp_customizer)
{
    //section
    $wp_customizer->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Setting',
            'Description' => 'Copyright Settings'
        )
    );

    //setting. Fica entre a section e o controle e é responsavel por persistir  os dados do controle, mas precisamente na tabela wp_option
    $wp_customizer->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reservedd',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    //controle
    $wp_customizer->add_control(
        'set_copyright',
        array(
            'label' => 'Copyright Information',
            'description' => 'Please, type your copyright here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );
}

add_action('customize_register', 'mytheme_customizer');
