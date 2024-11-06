<?php get_header(); ?>

<!-- Hero -->
<?php
if (is_category()) :
    $title = single_cat_title('', false);
    $description = category_description();
elseif (is_tag()) :
    $title = single_tag_title('', false);
    $description = tag_description();
else :
    $title = get_field("index_title", get_option('page_for_posts')) ?: get_the_title(get_option('page_for_posts'));
    $description = false;
endif;
?>
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <h1><?php echo $title; ?></h1>
        <?php if ($description) : ?>
            <?php echo $description; ?>
        <?php endif; ?>
    </div>
</section>

<!-- Loop -->
<section id="loop-<?php echo uniqid(); ?>" class="loop">
    <div class="container container-lg">

        <div class="posts-wrapper">
            <?php if (have_posts()) : ?>
                <div class="posts-list posts">
                    <?php
                    while (have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/item', 'post'); ?>

                    <?php endwhile; ?>
                    <?php the_posts_pagination(array(
                        'prev_text' => __('<span class="icon icon-left"></span>', 'new-maubeuge'),
                        'next_text' => __('<span class="icon icon-right"></span>', 'new-maubeuge'),
                    )); ?>
                </div>
            <?php else : echo __('Aucun article n\'a été (encore) publié ici.', 'new-maubeuge');
            endif; ?>

            <?php if (get_field("index_facebook_iframe", get_option('page_for_posts'))) : ?>
                <div class="sidebar">
                    <?php echo get_field("index_facebook_iframe", get_option('page_for_posts')); ?>
                    <?php if (have_rows('footer_socials', 'options')) : ?>
                        <div class="socials-wrapper">
                            <h3 class="h6-size"><?php echo __("Suivez nous sur les réseaux sociaux", "new-maubeuge"); ?></h3>
                            <div class="socials">
                                <?php while (have_rows('footer_socials', 'options')) : the_row();
                                    $icon = get_sub_field('icon');
                                    $link = get_sub_field('link'); ?>
                                    <a href="<?php echo $link; ?>" target="_blank" class="social">
                                        <?php get_template_part('assets/icons/socials/' . $icon . '.svg'); ?>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>