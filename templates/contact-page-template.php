<?php
/* Template Name: Page de contact */
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

<!-- Contact -->
<section id="contact-<?php echo uniqid(); ?>" class="contact">
    <div class="container">
        <p># TO DO</p>
    </div>
</section>

<?php get_footer(); ?> 