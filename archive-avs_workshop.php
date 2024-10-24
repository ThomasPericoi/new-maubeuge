<?php get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <div class="h4-size parent-title"><?php echo __("Les ateliers"); ?></div>
        <h1><?php echo post_type_archive_title('', false); ?></h1>
    </div>
</section>

<!-- Map -->
<section id="map-<?php echo uniqid(); ?>" class="map">
    <?php if (have_rows('workshops_numbers', 'options')) : ?>
        <div class="container container-sm">
            <div class="numbers-grid">
                <?php while (have_rows('workshops_numbers', 'options')) : the_row(); ?>
                    <div class="element number">
                        <div class="h3-size title number-title"><?php echo get_sub_field("number"); ?></div>
                        <div class="number-label"><?php echo get_sub_field("label"); ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="container container-lg">
        <div id="archive-workshops-map" class="map-wrapper">

        </div>
        <p># TO DO : La carte interactive</p>
    </div>
</section>

<?php get_template_part('template-parts/row-2-columns', 'regular', array(
    'title' => get_field("workshops_content_title", "options"),
    'content' => get_field("workshops_content_content", "options"),
    'cta' => false,
    'image' => get_field("workshops_content_image", "options"),
    'color-theme' => "apple",
    'direction' => 'reverse'
)); ?>

<?php get_footer(); ?>