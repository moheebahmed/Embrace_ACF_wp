<section class="Works">
    <div class="container">
        <div class="flex">
            <div class="works-text-box">
                <h2><?php the_field('work-heading'); ?></h2>
                <p class="para"><?php the_field('work-paragraph'); ?></p>
                <?php
                $image = get_field('work-bg');
                if ($image): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>
            </div>
            <div class="Main-bg-boxes">
                <?php if (have_rows('work-repeater')): ?>
                    <?php while (have_rows('work-repeater')): the_row(); ?>
                        <div class="Main-under-box">
                            <?php
                            $step_image = get_sub_field('work-repeater-bg');
                            if ($step_image): ?>
                                <div class="Main-bg">
                                    <img src="<?php echo esc_url($step_image['url']); ?>" alt="<?php echo esc_attr($step_image['alt']); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="Main-text">
                                <h4><?php the_sub_field('work-repeater-text'); ?></h4>
                                <p class="para"><?php the_sub_field('work-repeater-paragraph'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>