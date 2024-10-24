<?php get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <div class="h4-size parent-title"><?php echo __("L'association"); ?></div>
        <h1><?php echo post_type_archive_title('', false); ?></h1>
    </div>
</section>

<!-- Loop -->
<section id="loop-<?php echo uniqid(); ?>" class="loop">
    <div class="container">

        <?php if (have_posts()) : ?>
            <div class="project-list projects">
                <?php
                while (have_posts()) : the_post(); ?>

                    <?php get_template_part('template-parts/item', 'project'); ?>

                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(array(
                'prev_text' => __('<span class="icon icon-left"></span>', 'new-maubeuge'),
                'next_text' => __('<span class="icon icon-right"></span>', 'new-maubeuge'),
            )); ?>
        <?php else : echo __('Aucun projet n\'a été (encore) publié ici.', 'new-maubeuge');
        endif; ?>

    </div>
</section>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>