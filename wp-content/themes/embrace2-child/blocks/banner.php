<section class="banner">
    <div class="container">
        <div class="flex">
            <div class="banner-text">
                <h1><?php the_field('banner_heading'); ?></h1>
                <p class="para"><?php the_field('banner-paragraph'); ?></p>
                <?php
                $link = get_field('banner-button');
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
            <div class="banner-bg">
                <?php
                $banner_image = get_field('banner-image');
                if ($banner_image): ?>
                    <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>