<?php
/* Template Name: Les Papillons Blancs */
get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <div class="h4-size parent-title"><?php echo __("L'association"); ?></div>
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</section>

<?php get_template_part('template-parts/row-2-columns', 'large', array(
    'color-theme' => "tory-blue",
)); ?>

<!-- Team Composition -->
<section id="team-composition-<?php echo uniqid(); ?>" class="team-composition">
    <div class="container container-lg">
        <?php if (get_field("les_papillons_blancs_composition_title")) : ?>
            <h2><?php echo get_field("les_papillons_blancs_composition_title"); ?></h2>
        <?php endif; ?>
        <?php if (get_field("les_papillons_blancs_composition_text")) : ?>
            <p><?php echo get_field("les_papillons_blancs_composition_text"); ?></p>
        <?php endif; ?>
        <p># TO DO : La grille d</p>
    </div>
</section>

<?php get_template_part('template-parts/row-2-columns', 'regular', array(
    'title' => get_field("les_papillons_blancs_content_title"),
    'content' => get_field("les_papillons_blancs_content_content"),
    'cta' => false,
    'image' => get_field("les_papillons_blancs_content_image"),
    'color-theme' => "tory-blue",
    'direction' => 'reverse'
)); ?>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>