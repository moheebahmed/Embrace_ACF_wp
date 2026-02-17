<section class="Portfolio">
    <div class="container">
        <div class="portfolio-text">
            <h2><?php the_field('portfolio-heading'); ?></h2>
            <p class="para"><?php the_field('portfolio-paragraph'); ?></p>
        </div>
        <div class="main-portfolio-flex">
            <?php if (have_rows('portfolio-repeater')): ?>
                <?php while (have_rows('portfolio-repeater')): the_row(); ?>
                    <div class="portfolio-box">
                        <?php
                        $image = get_sub_field('portfolio-repeater-bg');
                        if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                        <h5><?php the_sub_field('portfolio-repeater-heading'); ?></h5>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php
        $link = get_field('portfolio-repeater-button');
        if ($link):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
    </div>
</section>