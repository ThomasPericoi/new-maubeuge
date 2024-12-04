<!-- Insights -->
<section id="insights-list-<?php echo uniqid(); ?>" class="insights-list">
    <div class="container container-lg">
        <?php if ($args['title']) : ?>
            <h2><?php echo $args['title']; ?></h2>
        <?php endif; ?>
        <?php if ($args['insights']) : ?>
            <div class="insights">
                <?php foreach ($args['insights'] as $insight) : ?>
                    <div class="element insight">
                        <div class="insight-inner">
                            <?php if ($insight['worker']) : ?>
                                <div class="face worker" style="background-image: url('<?php echo $insight["worker"]["portrait"]; ?>');">
                                    <p><?php echo $insight["worker"]["insight"]; ?></p>
                                    <div class="identity">
                                        <div class="name"><?php echo $insight["worker"]["name"]; ?></div>
                                        <div class="job"><?php echo $insight["worker"]["job"]; ?></div>
                                    </div>
                                    <button class="flip-icon">
                                        <?php get_template_part('assets/icons/arrow-back.svg'); ?>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <?php if ($insight['supervisor']) : ?>
                                <div class="face supervisor" style="background-image: url('<?php echo $insight["supervisor"]["portrait"]; ?>');">
                                    <p><?php echo $insight["supervisor"]["insight"]; ?></p>
                                    <div class="identity">
                                        <div class="name"><?php echo $insight["supervisor"]["name"]; ?></div>
                                        <div class="job"><?php echo $insight["supervisor"]["job"]; ?></div>
                                    </div>
                                    <button class="flip-icon">
                                        <?php get_template_part('assets/icons/arrow-back.svg'); ?>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>