<?php
/* Template Name: Nous rejoindre */
get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</section>

<!-- Dispatch -->
<section id="dispatch-<?php echo uniqid(); ?>" class="dispatch">
    <p># TO DO</p>
</section>

<?php get_template_part('template-parts/insights-list', '', array(
    'section_title' => get_field("join_us_insights_title"),
)); ?>

<!-- Rows -->
<?php if (have_rows('join_us_content_rows')) : ?>
    <?php while (have_rows('join_us_content_rows')) : the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $image = get_sub_field('image');
        $direction = (get_row_index() % 2)? 'reverse': 'normal' ?>

        <?php get_template_part('template-parts/row-2-columns', 'regular', array(
            'title' => $title,
            'content' => $content,
            'cta' => false,
            'image' => $image,
            'color-theme' => "apple",
            'direction' => $direction,
        )); ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>