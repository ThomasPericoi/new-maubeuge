<!-- Job Related Workshops -->
<?php $workshops = get_posts(array(
    'post_type' => 'avs_workshop',
    'post__in' => get_field('related_workshops_workshops'),
    'posts_per_page' => -1,
    'order' => 'ASC',
)); ?>

<section id="job-related-workshops-<?php echo uniqid(); ?>" class="job-related-workshops" style="--color-theme:<?php echo get_field("block_color"); ?>">
    <div class="container container-lg">
        <?php if (get_field("related_workshops_title")) : ?>
            <h2><?php echo get_field("related_workshops_title"); ?></h2>
        <?php endif; ?>
        <div class="workshops-list swiper">
            <div class="swiper-wrapper">
                <?php foreach ($workshops as $post) :
                    setup_postdata($post); ?>
                    <div class="workshop swiper-slide">
                        <div class="image-wrapper">
                            <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                            </div>
                        </div>
                        <div class="content">
                            <span><?php echo __("Ateliers du Val de Sambre de", "new-maubeuge"); ?></span>
                            <h3 class="h4-size"><?php echo get_the_title(); ?></h3>
                            <?php if (has_excerpt()) : ?>
                                <div><?php echo get_the_excerpt(); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>