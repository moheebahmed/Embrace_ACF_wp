<section class="commitments">
    <div class="container">
        <div class="flex">
            <div class="Main-counter-box">
                <?php if (have_rows('commitments-repeater')): ?>
                    <?php while (have_rows('commitments-repeater')): the_row(); ?>
                        <div class="counter-one">
                            <h2><?php the_sub_field('commitments-repeater-heading'); ?></h2>
                            <span><?php the_sub_field('commitments-repeater-span'); ?></span>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="commitments-box-two">
                <h2><?php the_field('commitments-right-heading'); ?></h2>
                <p class="para"><?php the_field('commitments-paragraph'); ?></p>
                <?php
                $learn_more = get_field('commitments-button');
                if ($learn_more):
                    $learn_more_url = $learn_more['url'];
                    $learn_more_title = $learn_more['title'];
                    $learn_more_target = $learn_more['target'] ? $learn_more['target'] : '_self';
                ?>
                    <a href="<?php echo esc_url($learn_more_url); ?>" class="arrow" target="<?php echo esc_attr($learn_more_target); ?>">
                        <?php echo esc_html($learn_more_title); ?> <img src="http://localhost/Embrace2.ACF/wp-content/uploads/2025/01/Vector.png" alt="">
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>