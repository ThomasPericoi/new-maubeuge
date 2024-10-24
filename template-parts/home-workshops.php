<section id="home-workshops-<?php echo uniqid(); ?>" class="home-workshops">
    <div class="container">
        <?php if (get_field("home_workshops_title")) : ?>
            <h2><?php echo get_field("home_workshops_title"); ?></h2>
        <?php endif; ?>
    </div>

    <div id="homepage-map" class="map-wrapper">
    </div>
    
    <div class="container">
        <p># TO DO : La carte interactive</p>
        <div class="btn-wrapper">
            <a class="btn btn-secondary" href="<?php echo get_post_type_archive_link('avs_workshop'); ?>"><?php echo __("Découvrir nos ateliers", "new-maubeuge"); ?></a>
        </div>
    </div>
</section>