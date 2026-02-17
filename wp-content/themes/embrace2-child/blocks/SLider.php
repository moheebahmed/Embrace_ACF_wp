<section class="Client-slider">
    <div class="container">
        <div class="flex">
            <div class="slider-text">
                <h2><?php the_field('slider-text-heading'); ?></h2>
            </div>
        </div>
    </div>
    <div class="three-slider-box owl-carousel owl-theme">
        <?php if (have_rows('slider-repeater')): ?>
            <?php while (have_rows('slider-repeater')): the_row();
                $client_image = get_sub_field('slider-repeater-bg');
                $client_name = get_sub_field('slider-repeater-text');
                $client_position = get_sub_field('slider-span-text');
                $client_testimonial = get_sub_field('slider-paragraph');
            ?>
                <div class="one-slider-box">
                    <div class="slider-under-box">
                        <div class="slider-under-bg">
                            <?php if ($client_image): ?>
                                <img src="<?php echo esc_url($client_image['url']); ?>" alt="<?php echo esc_attr($client_image['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="slider-under-text">
                            <h6><?php echo esc_html($client_name); ?></h6>
                            <span class="one"><?php echo esc_html($client_position); ?></span>
                        </div>
                    </div>
                    <p class="para"><?php echo esc_html($client_testimonial); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>