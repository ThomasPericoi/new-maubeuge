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
        <?php if (get_field("join_us_hero_text")) : ?>
            <p><?php echo get_field("join_us_hero_text"); ?></p>
        <?php endif; ?>
    </div>
</section>

<!-- Dispatch -->
<?php if (have_rows('join_us_cards_cards')) : ?>
    <section id="dispatch-<?php echo uniqid(); ?>" class="dispatch">
        <div class="cols-wrapper">
            <?php while (have_rows('join_us_cards_cards')) : the_row();
                $background = get_sub_field('background');
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $link = get_sub_field('link'); ?>

                <a href="<?php echo $link; ?>" class="col card" style="background-image: url('<?php echo $background; ?>');">
                    <div class="container">
                        <h2><?php echo $title; ?></h2>
                        <p><?php echo $text; ?></p>
                        <span class="btn btn-secondary"><?php echo __("En savoir plus", "new-maubeuge"); ?></span>
                    </div>
                </a>

            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>

<?php get_template_part('template-parts/insights-list', '', array(
    'title' => get_field("join_us_insights_title"),
    'insights' => get_field("join_us_insights_insights"),
)); ?>

<?php if (have_rows('join_us_content_rows')) : ?>
    <!-- Rows -->
    <?php while (have_rows('join_us_content_rows')) : the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $image = get_sub_field('image');
        $direction = (get_row_index() % 2) ? 'reverse' : 'normal' ?>

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