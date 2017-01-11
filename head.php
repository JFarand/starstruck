<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slider/style.css" />
<!--for slider script-->
    <meta name="et_featured_auto_speed" content="7000">
    <meta name="et_disable_toptier" content="0">
    <meta name="et_featured_slider_auto" content="1">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
