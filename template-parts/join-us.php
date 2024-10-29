<!-- Join Us -->
<section id="join-us-<?php echo uniqid(); ?>" class="join-us">
    <div class="container">
        <?php if ($args['title']) : ?>
            <h2><?php echo $args['title']; ?></h2>
        <?php endif; ?>
        <?php if ($args['cards']) : ?>
            <div class="cols-wrapper cards">
                <?php foreach ($args["cards"] as $key => $card) : ?>
                    <div class="col card">
                        <?php if ($card['image']) : ?>
                            <img src="<?php echo $card["image"]["url"]; ?>" alt="<?php echo $card["image"]["title"]; ?>">
                        <?php endif; ?>
                        <div class="content">
                            <?php if ($card['title']) : ?>
                                <h3 class="h5-size"><?php echo $card['title']; ?></h3>
                            <?php endif; ?>
                            <?php if ($card['text']) : ?>
                                <p><?php echo $card['text']; ?></p>
                            <?php endif; ?>
                            <?php if ($card['button_label']) : ?>
                                <a class="btn btn-secondary" href="<?php echo ($key % 2) ? (get_site_url() . '/nous-rejoindre/ouvriers/') : (get_site_url() . '/nous-rejoindre/encadrants/'); ?>"><?php echo $card['button_label']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>