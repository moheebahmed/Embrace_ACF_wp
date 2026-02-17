<section class="Accordian">
    <div class="container">
        <div class="flex">
            <div class="accordion__wrapper">
                <?php if (have_rows('accordian-repeater')): ?>
                    <?php while (have_rows('accordian-repeater')): the_row();
                        $question = get_sub_field('accordian-heading');
                        $answer = get_sub_field('accordian-paragraph');
                    ?>
                        <div class="accordion">
                            <div class="accordion__header">
                                <h6><?php echo esc_html($question); ?></h6>
                                <span class="accordion__icon">
                                    <i id="accordion-icon" class="ri-add-line"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="para"><?php echo esc_html($answer); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="accordian-text-box">
                <h3><?php the_field('accordian-right-text'); ?></h3>
                <p class="para"><?php the_field('accordian-right-paragraph'); ?></p>
                <?php
                $link = get_field('accordian-right-button');
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
                <?php
                $learn_more = get_field('accordian-right-arrow-button');
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