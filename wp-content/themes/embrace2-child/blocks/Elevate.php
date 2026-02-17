<section class="Elevate">
    <div class="container">
        <div class="flex" style="background-image: url(<?php echo esc_url(get_field('elevate-bg')['url']); ?>);
        background-repeat: no-repeat;
    background-size: contain;
    padding: 8% 4% 9%;">
            <div class="Elevate-one">
                <h2><?php the_field('elevate-heading'); ?></h2>
            </div>
            <div class="Elevate-two">
                <p class="para"><?php the_field('elevate-paragraph'); ?></p>
                <?php
                $link = get_field('elevate-button');
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>