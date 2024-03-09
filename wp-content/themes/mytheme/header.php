<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <div>
                <a class="nav-item" href="http:localhost:8000/forside">Forside</a>
                <a class="nav-item" href="http://localhost:8000/om-mig/">Om mig</a>
                <a class="nav-item" href="http://localhost:8000/kontakt-mig/">Kontakt</a>
            </div>
        </nav>
        <h1><?php bloginfo('name'); ?></h1>
        <span><?php bloginfo('description'); ?></span>
    </header>
