<section class="Logos">
    <div class="container">
        <div class="Logos-text">
            <h3><?php the_field('logos-heading'); ?></h3>
        </div>
        <?php if (have_rows('logos-repeater-one')): ?>
            <div class="marquee">
                <?php while (have_rows('logos-repeater-one')): the_row();
                    $logo_image = get_sub_field('logos-repeater-bg');
                    if ($logo_image):
                ?>
                        <img src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>">
                <?php endif;
                endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if (have_rows('logos-repeater')): ?>
            <div class="marquee">
                <?php while (have_rows('logos-repeater')): the_row();
                    $logo_image = get_sub_field('logos-repeater-bg');
                    if ($logo_image):
                ?>
                        <img src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>">
                <?php endif;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>