<?php get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</section>

<!-- Content -->
<section id="content">
    <div class="container container-sm formatted">
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>