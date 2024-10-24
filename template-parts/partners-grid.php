<!-- Partners Grid -->
<section id="partners-grid-<?php echo uniqid(); ?>" class="partners-grid">
    <div class="container">
        <?php if (get_field("partners_grid_title", "options")) : ?>
            <h2><?php echo get_field("partners_grid_title", "options"); ?></h2>
        <?php endif; ?>
        <?php if (get_field("partners_grid_text", "options")) : ?>
            <p><?php echo get_field("partners_grid_text", "options"); ?></p>
        <?php endif; ?>
        <?php if (get_field("partners_grid_logos", "options")): ?>
            <div class="logos-wrapper swiper">
                <ul class="logos-grid swiper-wrapper">
                    <?php foreach (get_field("partners_grid_logos", "options") as $partner): ?>
                        <li class="swiper-slide">
                            <img src="<?php echo esc_url($partner['url']); ?>" alt="<?php echo esc_attr($partner['alt']); ?>" />
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>