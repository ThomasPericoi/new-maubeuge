<?php
/* Template Name: Notre écosystème */
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
    'color-theme' => "var(--apple)",
)); ?>

<?php get_template_part('template-parts/testimonials-slider', '', array(
    'title' => get_field("our_ecosystem_testimonials_title"),
    'testimonials' => get_field("our_ecosystem_testimonials_testimonials"),
)); ?>

<?php get_template_part('template-parts/partners-grid'); ?>

<!-- Become Partner -->
<section id="become-partner-<?php echo uniqid(); ?>" class="become-partner">
    <div class="container">
        <?php if (get_field("our_ecosystem_become_partner_title")) : ?>
            <h2><?php echo get_field("our_ecosystem_become_partner_title"); ?></h2>
        <?php endif; ?>
        <?php if (get_field("our_ecosystem_become_partner_text")) : ?>
            <p><?php echo get_field("our_ecosystem_become_partner_text"); ?></p>
        <?php endif; ?>
        <p># TO DO</p>
    </div>
</section>

<!-- CTA -->
<section id="cta-<?php echo uniqid(); ?>" class="cta">
    <div class="container">
        <?php if (get_field("our_ecosystem_cta_title")) : ?>
            <h2 class="h3-size"><?php echo get_field("our_ecosystem_cta_title"); ?></h2>
        <?php endif; ?>
        <p># TO DO</p>
    </div>
</section>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>