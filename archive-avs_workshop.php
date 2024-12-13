<?php get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple hero-mobile-decorated">
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

    <?php if (have_posts()) : ?>
        <div class="container container-lg">
            <div class="map-wrapper">
                <div id="archive-workshops-map">
                </div>
                <div class="workshops">
                    <h2 class="h4-size"><?php echo __("Nos établissements par commune", "new-maubeuge"); ?></h2>
                    <div class="workshops-list">
                        <?php
                        while (have_posts()) : the_post(); ?>
                            <?php $jobs = get_posts(array(
                                'post_type' => 'avs_job',
                                'post__in' => get_field("related_jobs"),
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                            )); ?>
                            <a href="<?php echo get_the_permalink(); ?>" class="workshop <?php if (get_the_title() == "Maubeuge") : ?>hq<?php endif; ?>">
                                <span><?php echo get_the_title(); ?></span>
                                <?php if ($jobs) : ?>
                                    <div class="jobs-grid">
                                        <?php foreach ($jobs as $post) :
                                            setup_postdata($post); ?>
                                            <img class="icon" src="<?php echo get_field("block_picto")["url"]; ?>" alt="<?php echo get_field("block_picto")["title"]; ?>">
                                        <?php endforeach; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                <?php endif; ?>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php get_template_part('template-parts/row-2-columns', 'regular', array(
    'title' => get_field("workshops_content_title", "options"),
    'content' => get_field("workshops_content_content", "options"),
    'cta' => false,
    'image' => get_field("workshops_content_image", "options"),
    'color-theme' => "var(--apple)",
    'direction' => 'reverse'
)); ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Map
        const archiveWorkshopsMap = L.map("archive-workshops-map", {
            zoomControl: false,
            scrollWheelZoom: false
        }).setView(
            [50.2558, 3.9314],
            12
        );
        L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(archiveWorkshopsMap);

        // Markers
        var greyPointer = L.icon({
            iconUrl: '../wp-content/themes/new-maubeuge/assets/icons/pointer-grey.svg',
            iconSize: [21, 32],
        });
        var redPointer = L.icon({
            iconUrl: '../wp-content/themes/new-maubeuge/assets/icons/pointer-red.svg',
            iconSize: [21, 32],
        });

        <?php if (have_posts()) :
            while (have_posts()) : the_post();
                if (get_field("latitude") && get_field("longitude")) : ?>
                    L.marker([<?php echo get_field("latitude"); ?>, <?php echo get_field("longitude"); ?>], {
                            workshopUrl: "<?php echo get_the_permalink(); ?>",
                            <?php if (get_the_title() == "Maubeuge") : ?>
                                icon: redPointer
                            <?php else : ?>
                                icon: greyPointer
                            <?php endif; ?>
                        }).addTo(archiveWorkshopsMap)
                        .on('click', function(e) {
                            window.open(e.target.options.workshopUrl, '_self');
                        });
        <?php endif;
            endwhile;
        endif; ?>
    });
</script>

<?php get_footer(); ?>