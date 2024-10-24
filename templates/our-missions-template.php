<?php
/* Template Name: Nos missions & valeurs */
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

<?php get_template_part('template-parts/jobs-tabs', '', array(
    'button_style' => 'normal',
    'section_title' => get_field("our_missions_jobs_tabs_title"),
    'section_text' => get_field("our_missions_jobs_tabs_text"),
    'jobs' => 'all'
)); ?>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>