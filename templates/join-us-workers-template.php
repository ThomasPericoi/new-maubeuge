<?php
/* Template Name: Nous rejoindre (Ouvriers) */
get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <h1><?php echo get_field("title_alt") ?: get_the_title(); ?></h1>
    </div>
</section>

<?php get_template_part('template-parts/row-2-columns', 'large', array(
    'logo' => false,
    'subtitle' => get_field("join_us_workers_hero_subtitle"),
    'title' => get_field("join_us_workers_hero_title"),
    'content' => get_field("join_us_workers_hero_content"),
    'cta' => get_field("join_us_workers_hero_cta"),
    'image' => get_field("join_us_workers_hero_image"),
    'color-theme' => "var(--apple)",
    'direction' => 'reverse'
)); ?>

<!-- Discover  -->
<section id="discover-<?php echo uniqid(); ?>" class="discover">
    <div class="container">
        <p># TO DO</p>
    </div>
</section>

<!-- Rows -->
<?php if (have_rows('join_us_workers_content_rows')) : ?>
    <?php while (have_rows('join_us_workers_content_rows')) : the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $image = get_sub_field('image');
        $direction = (get_row_index() % 2)? 'reverse': 'normal' ?>

        <?php get_template_part('template-parts/row-2-columns', 'regular', array(
            'title' => $title,
            'content' => $content,
            'cta' => false,
            'image' => $image,
            'color-theme' => "var(--apple)",
            'direction' => $direction,
        )); ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>