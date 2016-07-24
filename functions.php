<?php
require_once( 'library/bones.php' );

// Remove unused admin sidebar menu items
function custom_menu_page_removing() {
  $remove_menus = array(
    'edit-comments.php'
  );

  foreach($remove_menus as $menu) {
    remove_menu_page($menu);
  }
}
add_action('admin_menu', 'custom_menu_page_removing');

/************* ACTIVE SIDEBARS ********************/
// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
  register_sidebar(array(
    'id' => 'blog-sidebar',
    'name' => __( 'Blog Sidebar', 'bonestheme' ),
    'description' => __( 'The sidebar for blog pages.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'id' => 'page-sidebar',
    'name' => __( 'Page Sidebar', 'bonestheme' ),
    'description' => __( 'The sidebar for pages based on the Page with Sidebar template.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ));
}

?>
