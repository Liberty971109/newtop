<?php

//移除添加至购物车
if (get_field('hide_cart', 'option')) {
    add_filter( 'woocommerce_is_purchasable', '__return_false');
}

//移除wc的价格
if (get_field('hide_price', 'option')) {
    add_filter( 'woocommerce_get_price_html', function( $price ) {
        //if ( is_admin() ) return $price;
        return '';
    } );
}

//修改WC按键的类名，并去掉nofollow标签
function remove_rel( $args, $product ) {
    unset( $args['attributes']['rel'] );
    $args['class'] = 'elementor-button';
    return $args;
}

if (get_field('disable_nofollow', 'option')) {
    add_filter( 'woocommerce_loop_add_to_cart_args', 'remove_rel', 10, 2 );
}

//移除WC菜单栏中的多余选项
function custom_menu_page_removing() {
    remove_submenu_page('woocommerce', 'wc-reports');
    remove_submenu_page('woocommerce', 'wc-status');
    remove_submenu_page('woocommerce', 'wc-addons');
    remove_submenu_page('woocommerce', 'edit.php?post_type=shop_coupon');
    remove_submenu_page('woocommerce', 'edit.php?post_type=shop_order');
}

if(get_field('hide_menu', 'option')) {
add_action('admin_menu', 'custom_menu_page_removing', 110);
add_filter( 'woocommerce_admin_disabled', '__return_true' );
}

//添加透明页头
function collectiveray_load_js_script() {
    if( is_front_page() ) {
        wp_enqueue_script( 'js-file', plugin_dir_url( __DIR__ ) . 'js/overlay_header.js', array(), null, true);
    }
}

if( get_field( 'overlay_header', 'option' ) ){
    add_action('wp_enqueue_scripts', 'collectiveray_load_js_script');
}

//添加样式优化
function collectiveray_load_stylesheet() {
    wp_enqueue_style( 'css-file', plugin_dir_url( __DIR__ ) . 'css/elementor.css', false,'1.1','all');
}

if( get_field( 'elementor_css_optimize', 'option' ) ){
    add_action('wp_enqueue_scripts', 'collectiveray_load_stylesheet');
}

//启用精简模式
// Remove WordPress menu from WP logo
function wplogomenu_admin_bar_remove() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}

// Hide Help tab
function hide_help() {
    echo '<style type="text/css">#contextual-help-link-wrap { display: none !important; }</style>';
}

// Remove Menu Items > Removes Tools and Users
function remove_menus() {
    global $menu;
    $restricted = array(__('Tools'),__('Users'));
    end ($menu);
    while ( prev( $menu ) ) {
        $value = explode( ' ',$menu[key($menu)][0] );
        if( in_array( $value[0] != NULL ? $value[0] : '' , $restricted ) ) { 
            unset( $menu[key($menu)] );
        }
    }
}

// Change Dashboard Footer Attribution
function remove_footer_admin() {
    echo '';
}

// Remove submenu theme and menu
function remove_theme_submenu() {
    remove_menu_page('wp-user-avatar');
    remove_submenu_page('themes.php', 'themes.php');
    remove_submenu_page('themes.php', 'nav-menus.php');
    remove_submenu_page('options-general.php', 'options-writing.php');
    remove_submenu_page('options-general.php', 'options-discussion.php');
    remove_submenu_page('options-general.php', 'options-media.php');
    remove_submenu_page('elementor', 'edit.php?post_type=elementor_font');
    remove_submenu_page('elementor', 'edit.php?post_type=elementor_icons');
    remove_submenu_page('elementor', 'elementor-role-manager');
    remove_submenu_page('elementor', 'elementor-system-info');
    remove_submenu_page('elementor', 'elementor-getting-started');
    remove_submenu_page('elementor', 'go_knowledge_base_site');
}

if( get_field( 'enable_minimize', 'option' ) ) {
    add_action( 'wp_before_admin_bar_render', 'wplogomenu_admin_bar_remove', 0 );
    add_action( 'admin_head', 'hide_help' );
    add_action( 'admin_menu', 'remove_menus' );
    add_filter( 'admin_footer_text', 'remove_footer_admin' );
    add_action('admin_head', 'remove_theme_submenu' );
}