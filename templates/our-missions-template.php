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
    'logo' => false,
    'subtitle' => get_field("our_missions_hero_subtitle"),
    'title' => get_field("our_missions_hero_title"),
    'content' => get_field("our_missions_hero_content"),
    'details' => false,
    'cta' => false,
    'image' => get_field("our_missions_hero_image"),
    'color-theme' => "var(--apple)",
    'direction' => 'reverse'
)); ?>

<?php get_template_part('template-parts/jobs-tabs', '', array(
    'button_style' => 'normal',
    'title' => get_field("our_missions_jobs_tabs_title"),
    'text' => get_field("our_missions_jobs_tabs_text"),
    'jobs' => 'all'
)); ?>

<?php if (have_rows('our_missions_our_values_values')) : ?>
    <!-- Our Values -->
    <section id="our-values-<?php echo uniqid(); ?>" class="our-values">
        <div class="container">
            <?php if (get_field("our_missions_our_values_title")) : ?>
                <h2><?php echo get_field("our_missions_our_values_title"); ?></h2>
            <?php endif; ?>
            <?php if (get_field("our_missions_our_values_text")) : ?>
                <p><?php echo get_field("our_missions_our_values_text"); ?></p>
            <?php endif; ?>
            <div class="values-grid">
                <?php while (have_rows('our_missions_our_values_values')) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text'); ?>
                    <div class="element value">
                        <?php if ($title) : ?>
                            <h3 class="h5-size"><?php echo $title; ?></h3>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                            <p><?php echo $text; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>