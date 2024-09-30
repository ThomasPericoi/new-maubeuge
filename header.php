<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Header -->
    <?php $button_1 = get_field('header_button_1', 'options');
    $button_2 = get_field('header_button_2', 'options'); ?>
    <header id="header" class="header">
        <div class="container">
            <div class="inner-header">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
                <div class="nav-wrapper">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'menu menu-header', 'container' => false)); ?>
                    <?php if (get_field('header_cta_primary', 'options') || get_field('header_cta_secondary', 'options')) : ?>
                        <div class="btn-wrapper">
                            <?php if (get_field('header_cta_primary', 'options')) : ?>
                                <a class="btn btn-secondary btn-icon-<?php echo get_field("header_cta_primary_icon", "options"); ?>" href="<?php echo get_field('header_cta_primary', 'options')['url']; ?>"><?php echo get_field('header_cta_primary', 'options')['title']; ?></a>
                            <?php endif; ?>
                            <?php if (get_field('header_cta_secondary', 'options')) : ?>
                                <a class="btn btn-icon-<?php echo get_field("header_cta_secondary_icon", "options"); ?>" href="<?php echo get_field('header_cta_primary', 'options')['url']; ?>"><?php echo get_field('header_cta_primary', 'options')['title'];; ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="menu-toggle-col">
                    <div class="menu-toggle-wrapper">
                        <input id="menu-toggle" class="menu-toggle" type="checkbox" role="button" tabindex="0" aria-label="Ouvrir le menu" />
                        <div class="menu-toggle-open" aria-hidden="true">
                            <span aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main aria-hidden="false">