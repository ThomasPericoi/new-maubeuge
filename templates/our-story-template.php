<?php
/* Template Name: Notre histoire */
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
    'subtitle' => get_field("our_story_hero_subtitle"),
    'title' => get_field("our_story_hero_title"),
    'content' => get_field("our_story_hero_content"),
    'cta' => false,
    'image' => get_field("our_story_hero_image"),
    'color-theme' => "var(--apple)",
    'direction' => 'normal'
)); ?>

<!-- Dates -->
<section id="dates-<?php echo uniqid(); ?>" class="dates">
    <div class="container">
        <?php if (get_field("our_story_dates_title")) : ?>
            <h2><?php echo get_field("our_story_dates_title"); ?></h2>
        <?php endif; ?>
        <p># TO DO : Les grandes dates</p>
    </div>
</section>

<?php get_template_part('template-parts/row-2-columns', 'regular', array(
    'title' => get_field("our_story_content_title"),
    'content' => get_field("our_story_content_content"),
    'cta' => false,
    'image' => get_field("our_story_content_image"),
    'color-theme' => "var(--apple)",
    'direction' => 'reverse'
)); ?>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>