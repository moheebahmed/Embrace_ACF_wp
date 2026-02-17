<?php
function enqueue_parent_styles_and_scripts()
{
   wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

   wp_enqueue_script('custom-index-script', get_stylesheet_directory_uri() . '/index.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles_and_scripts');



acf_register_block_type(array(
   'name'              => 'banner',
   'title'             => __('banner'),
   'description'       => __('banner Block'),
   'render_template'   => get_stylesheet_directory() . '/blocks/banner.php',
));

acf_register_block_type(array(
   'name'              => 'Logos',
   'title'             => __('Logos'),
   'description'       => __('Logos Block'),
   'render_template'   => get_stylesheet_directory() . '/blocks/Logos.php',
));

acf_register_block_type(array(
   'name'              => 'commitments',
   'title'             => __('commitments'),
   'description'       => __('commitments Block'),
   'render_template'   => get_stylesheet_directory() . '/blocks/commitments.php',
));
acf_register_block_type(array(
   'name'              => 'How',
   'title'             => __('How'),
   'description'       => __('How Block'),
   'render_template'   => get_stylesheet_directory() . '/blocks/How.php',
));
acf_register_block_type(array(
   'name'              => 'Portfolio',
   'title'             => __('Portfolio'),
   'description'       => __('Portfolio Block'),
   'render_template'   => get_stylesheet_directory() . '/blocks/Portfolio.php',
));
acf_register_block_type(array(
   'name'              => 'Meet',
   'title'             => __('Meet'),
   'description'       => __('Meet Block'),
   'render_template'   => get_stylesheet_directory() . '/blocks/Meet.php',
));
acf_register_block_type(array(
   'name'              => 'Elevate',
   'title'             => __('Elevate'),
   'description'       => __('Elevate Block'),
   'render_template'   => get_stylesheet_directory() . '/blocks/Elevate.php',
));
acf_register_block_type(array(
   'name'              => 'SLider',
   'title'             => __('SLider'),
   'description'       => __('SLider Block'),
   'render_template'   => get_stylesheet_directory() . '/blocks/SLider.php',
));
acf_register_block_type(array(
   'name'              => 'Accordian',
   'title'             => __('Accordian'),
   'description'       => __('Accordian Block'),
   'render_template'   => get_stylesheet_directory() . '/blocks/Accordian.php',
));

function custom_footer_widgets()
{
   register_sidebar(array(
      'name'          => __('Footer Column 1', 'textdomain'),
      'id'            => 'column1',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
   ));

   register_sidebar(array(
      'name'          => __('Footer Column 2', 'textdomain'),
      'id'            => 'column2',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
   ));
}
add_action('widgets_init', 'custom_footer_widgets');
