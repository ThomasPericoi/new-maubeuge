<section id="home-workshops-<?php echo uniqid(); ?>" class="home-workshops">
    <div class="container">
        <?php if (get_field("home_workshops_title")) : ?>
            <h2><?php echo get_field("home_workshops_title"); ?></h2>
        <?php endif; ?>
    </div>

    <div class="map-wrapper">
        <div id="homepage-map">
        </div>
        <?php if (have_rows('home_workshops_workshops')) : ?>
            <?php while (have_rows('home_workshops_workshops')) : the_row(); ?>
                <div class="workshop" data-popup-id="<?php echo get_row_index(); ?>">
                    <div class="thumbnail" style="background-image: url('<?php echo get_sub_field("thumbnail"); ?>');">
                        <button class="close">
                            <?php get_template_part('assets/icons/close.svg'); ?>
                        </button>
                    </div>
                    <div class="content">
                        <img class="picto" src="<?php echo get_field('block_picto', get_sub_field('job')[0]->ID)["url"]; ?>" />
                        <h3 class="h4-size"><?php echo get_sub_field("title"); ?></h3>
                        <span class="city"><?php echo get_sub_field("city"); ?></span>
                        <p>
                            <?php echo get_sub_field("address"); ?><br />
                            <?php echo get_sub_field("text"); ?>
                        </p>
                    </div>
                    <a class="btn" href="<?php echo get_the_permalink(get_sub_field('job')[0]->ID); ?>"><?php echo __("En savoir plus", "new-maubeuge"); ?></a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="container">
        <div class="btn-wrapper">
            <a class="btn btn-secondary" href="<?php echo get_post_type_archive_link('avs_workshop'); ?>"><?php echo __("Découvrir nos ateliers", "new-maubeuge"); ?></a>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Map
        const homepageMap = L.map("homepage-map", {
            scrollWheelZoom: false
        }).setView([50.2558, 3.9314], 12);
        L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(homepageMap);

        // Markers
        function openMapPopup(target) {
            document.querySelectorAll(".home .map-wrapper .workshop").forEach(function(item) {
                item.classList.remove("active");
            });
            document.querySelector(".home .map-wrapper .workshop[data-popup-id='" + target + "']").classList.add("active");
        }

        document.querySelectorAll(".home .map-wrapper .workshop .close").forEach(function(item) {
            item.addEventListener("click", function() {
                document.querySelector(".home .map-wrapper .workshop.active").classList.remove("active");
            });
        });

        <?php if (have_rows('home_workshops_workshops')) : ?>
            <?php while (have_rows('home_workshops_workshops')) : the_row(); ?>

                L.marker([<?php echo get_sub_field("latitude"); ?>, <?php echo get_sub_field("longitude"); ?>], {
                        icon: L.icon({
                            iconUrl: "<?php echo get_field('block_picto', get_sub_field('job')[0]->ID)["url"]; ?>",
                            iconSize: [40, 40],
                        }),
                        targetPopup: <?php echo get_row_index(); ?>
                    }).addTo(homepageMap)
                    .on('click', function(e) {
                        openMapPopup(e.target.options.targetPopup);
                    });
            <?php endwhile; ?>
        <?php endif; ?>
    });
</script>