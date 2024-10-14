<!-- Latest Posts  -->
<?php $latest = get_posts(array(
    'numberposts' => $args['amount'],
    'post__not_in' => array($post->ID)
)); ?>

<?php if ($latest) : ?>
    <section id="latest-posts-<?php echo uniqid(); ?>" class="latest-posts">
        <div class="container container-lg">
            <h2><?php echo $args['section_title']; ?></h2>
            <div class="posts-grid grid-<?php echo $args['amount']; ?>">
                <?php foreach ($latest as $post) :
                    setup_postdata($post); ?>

                    <?php get_template_part('template-parts/item', 'post'); ?>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>