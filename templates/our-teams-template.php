<?php
/* Template Name: Nos équipes */
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
    'logo' => false,
    'subtitle' => get_field("our_teams_hero_subtitle"),
    'title' => get_field("our_teams_hero_title"),
    'content' => get_field("our_teams_hero_content"),
    'cta' => false,
    'image' => get_field("our_teams_hero_image"),
    'color-theme' => "var(--apple)",
    'direction' => 'reverse'
)); ?>

<!-- Workers -->
<section id="workers-<?php echo uniqid(); ?>" class="workers">
    <div class="container container-lg">
        <p># TO DO : La liste des filières</p>
    </div>
</section>

<?php get_template_part('template-parts/join-us', '', array(
    'title' => get_field("our_teams_join_title"),
    'cards' => get_field("our_teams_join_cards"),
)); ?>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>