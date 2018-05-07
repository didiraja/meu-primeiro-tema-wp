<?php

function geraTitle() {
    bloginfo('name');
    
    if( !is_home() ) {
        echo ' | ';
        the_title();
    } else {
        
    }
}

add_theme_support('post-thumbnails');


function cadastrando_post_type_imoveis() {

    $nomeSingular = 'Imóvel';
    $nomePlural = 'Imóveis';

    $labels = array(
        'name' => $nomePlural,
        'singular_name' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular,
        'not_found' => 'Nenhum ' . $nomeSingular . ' encontrado'
    );
    
    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array (
        'labels' => $labels,
        'public' => true,
        'description' => 'Imóveis da imobiliária Malura',
        'menu_icon' => 'dashicons-admin-home',
        'supports' => $supports
    );

    register_post_type('imovel', $args);
};

add_action('init', 'cadastrando_post_type_imoveis');


function registrar_menu_navegacao() {
    register_nav_menu('header-menu', 'main-menu');
}

add_action('init', 'registrar_menu_navegacao');


function registra_taxonomia_localizacao() {
    
    $nomeSingular = 'Localização';
    $nomePlural = 'Localizações';

    $labels = array(
        'name' => $nomePlural,
        'singular_name' => $nomeSingular,
        'add_new_item' => 'Adicionar nova ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular,
        'not_found' => 'Nenhuma ' . $nomeSingular . ' encontrada'   
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true
    );

    register_taxonomy('localizacao', 'imovel', $args);
    
}

add_action('init', 'registra_taxonomia_localizacao');