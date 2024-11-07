<?php
/* Template Name: Les Papillons Blancs */
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
    'logo' => get_field("les_papillons_blancs_hero_logo"),
    'subtitle' => get_field("les_papillons_blancs_hero_subtitle"),
    'title' => get_field("les_papillons_blancs_hero_title"),
    'content' => get_field("les_papillons_blancs_hero_content"),
    'cta' => false,
    'image' => get_field("les_papillons_blancs_hero_image"),
    'color-theme' => "var(--tory-blue)",
    'direction' => 'normal'
)); ?>

<?php if (have_rows('les_papillons_blancs_composition_gallery')) : ?>
    <!-- Team Composition -->
    <section id="team-composition-<?php echo uniqid(); ?>" class="team-composition">
        <div class="container container-lg">
            <?php if (get_field("les_papillons_blancs_composition_title")) : ?>
                <h2><?php echo get_field("les_papillons_blancs_composition_title"); ?></h2>
            <?php endif; ?>
            <?php if (get_field("les_papillons_blancs_composition_text")) : ?>
                <p><?php echo get_field("les_papillons_blancs_composition_text"); ?></p>
            <?php endif; ?>
            <div class="gallery">
                <?php while (have_rows('les_papillons_blancs_composition_gallery')) : the_row();
                    $image = get_sub_field('image'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_template_part('template-parts/row-2-columns', 'regular', array(
    'title' => get_field("les_papillons_blancs_content_title"),
    'content' => get_field("les_papillons_blancs_content_content"),
    'cta' => false,
    'image' => get_field("les_papillons_blancs_content_image"),
    'color-theme' => "var(--tory-blue)",
    'direction' => 'reverse'
)); ?>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>