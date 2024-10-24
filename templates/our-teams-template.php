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
    'color-theme' => "apple",
)); ?>

<!-- Workers -->
<section id="workers-<?php echo uniqid(); ?>" class="workers">
    <div class="container container-lg">
        <p># TO DO : La liste des filières</p>
    </div>
</section>

<?php get_template_part('template-parts/join-us', '', array(
    'section_title' => get_field("our_teams_join_title"),
)); ?>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>