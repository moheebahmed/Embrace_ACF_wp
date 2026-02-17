<section class="Meet">
    <div class="container">
        <div class="flex">
            <div class="six-bg-boxes">
                <?php if (have_rows('meet-repeater')): ?>
                    <?php while (have_rows('meet-repeater')): the_row();
                        $team_image = get_sub_field('meet-bg');
                    ?>
                        <?php if ($team_image): ?>
                            <img src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_image['alt']); ?>">
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="sic-bg-texts">
                <h2><?php the_field('meet-heading-text'); ?></h2>
                <p class="para"><?php the_field('meet-paragraph'); ?></p>
                <?php
                $link = get_field('meet-button');
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