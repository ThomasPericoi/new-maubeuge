<?php
/* Template Name: Nous rejoindre (Encadrants) */
get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple hero-mobile-decorated">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <h1><?php echo get_field("title_alt") ?: get_the_title(); ?></h1>
        <?php if (have_rows('join_us_supervisors_offers')) : ?>
            <div class="jobs-list">
                <?php while (have_rows('join_us_supervisors_offers')) : the_row();
                    $title = get_sub_field('title');
                    $city = get_sub_field('city');
                    $type = get_sub_field('type');
                    $document = get_sub_field('document');
                    $link = get_sub_field('link'); ?>
                    <div class="job">
                        <div class="col">
                            <?php if ($title) : ?>
                                <h2 class="h5-size"><?php echo $title; ?></h2>
                            <?php endif; ?>
                            <div class="informations">
                                <?php if ($city) : ?>
                                    <div class="city">
                                        <?php get_template_part('assets/icons/location-circled.svg'); ?><span><?php echo $city; ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($type) : ?>
                                    <div class="type">
                                        <?php get_template_part('assets/icons/contract-circled.svg'); ?><span><?php echo $type; ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="btn-wrapper">
                                <?php if ($document) : ?>
                                    <a href="<?php echo $document; ?>" target="_blank" class="btn btn-icon-pdf"><?php echo __("Visualiser l'offre", "new-maubeuge"); ?></a>
                                <?php endif; ?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo $link; ?>" target="_blank" class="btn btn-primary btn-icon-linkedin"><?php echo __("Visualiser sur LinkedIn", "new-maubeuge"); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php if (have_rows('join_us_supervisors_jobs_description_rows')) : ?>
    <!-- Our Jobs -->
    <section id="jobs-description-<?php echo uniqid(); ?>" class="jobs-description">
        <div class="container">
            <?php if (get_field("join_us_supervisors_jobs_description_title")) : ?>
                <h2><?php echo get_field("join_us_supervisors_jobs_description_title"); ?></h2>
            <?php endif; ?>
            <div class="jobs-description-grid">
                <?php while (have_rows('join_us_supervisors_jobs_description_rows')) : the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content'); ?>
                    <div class="job-description formatted">
                        <?php if ($title) : ?>
                            <h3 class="h5-size"><?php echo $title; ?></h3>
                        <?php endif; ?>
                        <?php if ($content) : ?>
                            <?php echo $content; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Rows -->
<?php if (have_rows('join_us_supervisors_content_rows')) : ?>
    <?php while (have_rows('join_us_supervisors_content_rows')) : the_row();
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