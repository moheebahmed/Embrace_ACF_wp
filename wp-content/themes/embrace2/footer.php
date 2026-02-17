<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Embrace2
 */

?>
<footer>
    <div class="container">
        <div class="flex">
            <div class="foot-logo-box">
                <?php dynamic_sidebar('Column1'); ?>
            </div>
            <div class="front-foot-box">
                <?php dynamic_sidebar('Column2'); ?>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->
<?php wp_footer(); ?>

</body>

</html>