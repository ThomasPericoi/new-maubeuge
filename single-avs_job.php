<?php get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple" style="--color-theme:<?php echo get_field("block_color"); ?>">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <div class="h4-size parent-title"><?php echo __("Nos métiers"); ?></div>
        <h1><?php echo get_the_title(); ?></h1>
    </div>

    <div class="thumbnail" style="background-image: url('<?php echo get_field("thumbnail"); ?>');"></div>

    <div class="introduction">
        <div class="container container-lg">
            <div class="cols-wrapper">
                <div class="col formatted">
                    <?php if (get_field("introduction_title")) : ?>
                        <h2 class="h3-size"><?php echo get_field("introduction_title"); ?></h2>
                    <?php endif; ?>
                    <?php if (get_field("introduction_content")) : ?>
                        <?php echo get_field("introduction_content"); ?>
                    <?php endif; ?>
                </div>
                <div id="job-form" class="col">
                    <p># TO DO : Formulaire</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/row-2-columns', 'regular', array(
    'title' => get_field("services_title"),
    'content' => get_field("services_content"),
    'cta' => false,
    'image' => get_field("services_image"),
    'color-theme' => get_field("block_color"),
    'direction' => 'reverse',
)); ?>

<?php get_template_part('template-parts/job-qualities'); ?>

<?php get_template_part('template-parts/testimonials-slider', '', array(
    'title' => get_field("testimonials_title"),
    'testimonials' => get_field("testimonials_testimonials"),
)); ?>

<?php get_template_part('template-parts/job-cta-form'); ?>

<?php get_template_part('template-parts/row-2-columns', 'regular', array(
    'title' => get_field("teams_title"),
    'content' => get_field("teams_content"),
    'cta' => false,
    'image' => get_field("teams_image"),
    'color-theme' => get_field("block_color"),
    'direction' => 'normal',
)); ?>

<?php get_template_part('template-parts/insights-list', '', array(
    'title' => get_field("insights_title"),
    'insights' => get_field("insights_insights"),
)); ?>

<?php get_template_part('template-parts/join-us', '', array(
    'title' => get_field("join_us_title"),
    'cards' => get_field("join_us_cards"),
)); ?>

<?php get_template_part('template-parts/job-related-workshops'); ?>

<?php get_footer(); ?>