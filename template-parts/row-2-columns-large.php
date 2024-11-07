<section id="row-2-columns-<?php echo uniqid(); ?>" class="row-2-columns row-2-columns-large" style="--color-theme: <?php echo $args['color-theme']; ?>;">
    <div class="container container-lg">
        <div class="cols-wrapper <?php echo $args['direction']; ?>">
            <div class="col formatted">
                <?php if ($args['logo']) : ?>
                    <img src="<?php echo $args['logo']['url']; ?>" alt="<?php echo $args['logo']['title']; ?>">
                <?php endif; ?>
                <?php if ($args['subtitle']) : ?>
                    <span class="subtitle"><?php echo $args['subtitle']; ?></span>
                <?php endif; ?>
                <?php if ($args['title']) : ?>
                    <h2><?php echo $args['title']; ?></h2>
                <?php endif; ?>
                <?php if ($args['content']) : ?>
                    <?php echo $args['content']; ?>
                <?php endif; ?>
                <?php if ($args['cta']) : ?>
                    <a class="btn btn-secondary" href="<?php echo $args['cta']["url"]; ?>"><?php echo $args['cta']["title"]; ?></a>
                <?php endif; ?>
            </div>
            <div class="col">
                <?php if ($args['image']) : ?>
                    <div class="image-wrapper">
                        <div class="thumbnail" style="background-image: url('<?php echo $args['image']; ?>');">
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>