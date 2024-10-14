<?php get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <h1><?php echo __("Page non trouvée", "new-maubeuge"); ?></h1>
        <a class="btn btn-primary" href="<?php echo get_home_url(); ?>"><?php echo __("Retourner à l'accueil", "new-maubeuge"); ?></a>
    </div>
</section>

<?php get_template_part('template-parts/partners-grid'); ?>

<?php get_footer(); ?>