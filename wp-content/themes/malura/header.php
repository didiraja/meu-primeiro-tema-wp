<!DOCTYPE html>
<html lang="en">
<head>
   <?php $dir_tema = get_template_directory_uri(); ?>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    
    <title><?php geraTitle(); ?></title>
    
    <link rel="stylesheet" href="<?= $dir_tema ?>/reset.css">
    <link rel="stylesheet" href="<?= $dir_tema ?>/style.css">
    
    <link rel="stylesheet" href="<?= $dir_tema ?>/assets/css/comum.css">
    <link rel="stylesheet" href="<?= $dir_tema ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?= $dir_tema ?>/assets/css/<?= $css_especifico; ?>.css">
</head>
<body>


    <header>
        <div class="container">
            <?php
            
            $args = array(
                'theme_location' => 'header-menu'
            );
    
                wp_nav_menu( $args );
            ?>
        </div>
    </header>