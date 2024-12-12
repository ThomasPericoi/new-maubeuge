<!-- Jobs Tabs -->
<?php $jobs_included = ($args['jobs'] == "all") ? false : $args['jobs'];

$jobs = get_posts(array(
    'post_type' => 'avs_job',
    'post__in' => $jobs_included,
    'posts_per_page' => -1,
    'order' => 'ASC',
)); ?>

<?php if ($jobs) : ?>
    <section id="jobs-tabs-<?php echo uniqid(); ?>" class="jobs-tabs <?php echo $args['button_style']; ?>">
        <div class="container">
            <?php if ($args['title']) : ?>
                <h2><?php echo $args['title']; ?></h2>
            <?php endif; ?>
            <?php if ($args['text']) : ?>
                <p><?php echo $args['text']; ?></p>
            <?php endif; ?>
            <div class="jobs-tabs-wrapper">
                <?php foreach ($jobs as $post) :
                    setup_postdata($post); ?>

                    <button class="job-tab-button" style="--color-theme:<?php echo get_field("block_color"); ?>"><img class="icon" src="<?php echo get_field("block_picto")["url"]; ?>" alt="<?php echo get_field("block_picto")["title"]; ?>"><span><?php echo get_the_title(); ?></span></button>

                    <div class="job-tab-content" style="--color-theme:<?php echo get_field("block_color"); ?>">
                        <div class="col">
                            <div class="image-wrapper">
                                <div class="thumbnail" style="background-image: url('<?php echo get_field("block_image"); ?>');">
                                </div>
                            </div>
                        </div>
                        <div class="col formatted">
                            <img class="icon" src="<?php echo get_field("block_picto")["url"]; ?>" alt="<?php echo get_field("block_picto")["title"]; ?>">
                            <h3><?php echo get_the_title(); ?></h3>
                            <?php echo get_field("block_content"); ?>
                            <a class="btn btn-primary" href="<?php echo get_the_permalink(); ?>"><?php echo __("Découvrir", "new-maubeuge"); ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>