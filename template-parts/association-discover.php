<!-- Association Discover -->
<section id="association-discover-<?php echo uniqid(); ?>" class="association-discover">
    <div class="container">
        <?php if (get_field("association_discover_title", "options")) : ?>
            <h2><?php echo get_field("association_discover_title", "options"); ?></h2>
        <?php endif; ?>
        <?php if (have_rows('association_discover_cards', "options")) : ?>
            <div class="cards-grid">
                <?php while (have_rows('association_discover_cards', "options")) : the_row();
                    $label = get_sub_field('label');
                    $link = get_sub_field('link');
                    $background = get_sub_field('background'); ?>

                    <?php if ((get_the_ID() !== url_to_postid($link)) && (is_archive() ? (url_to_postid($link) !== 0) : true)) : ?>
                        <a class="element card" href="<?php echo $link; ?>" style="background-image: url('<?php echo $background; ?>');">
                            <?php if ($label) : ?>
                                <?php echo $label; ?>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>