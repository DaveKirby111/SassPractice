<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php wp_head(); ?>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sass Practice</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Space+Mono">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body <?php body_class(); ?>>

        <div class="header">

        <?php

        if( function_exists('the_custom_logo')) {
        the_custom_logo();
        }

        ?>

            <h1><?php the_title(); ?></h1>

        </div>

        <div class="nav">

		

        </div>