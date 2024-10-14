<?php get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <h1><?php echo get_the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail("full", array('class' => 'cover')); ?>
        <?php endif; ?>
    </div>
</section>

<!-- Content -->
<section id="content">
    <div class="container container-sm formatted">
        <?php the_content(); ?>
    </div>
</section>

<?php get_template_part('template-parts/latest-posts', '', array(
    'numberposts' => get_field("home_posts_amount"),
    'section_title' => __("Nos dernières actualités", "new-maubeuge"),
)); ?>

<?php get_footer(); ?>