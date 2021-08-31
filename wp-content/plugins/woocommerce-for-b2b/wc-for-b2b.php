<?php
/**
 * Plugin Name: WooCommerce for B2B
 * Description: 修改文案、移除价格，让WC插件更好地适应外贸B2B。
 * Plugin URI: https://xunpanziyou.com/
 * Author: Yansir
 * Version: 1.0.0
 * Author URI: https://xunpanziyou.com/author/yansir
 * Text Domain: change-wc-text
 */

class woo_for_b2b_Plugin{
    public function __construct() {
        // Hook into the admin menu
        add_action( 'admin_menu', array( $this, 'create_plugin_settings_page' ) );

        add_filter( 'acf/settings/path', array( $this, 'update_acf_settings_path' ) );
        add_filter( 'acf/settings/dir', array( $this, 'update_acf_settings_dir' ) );

        add_filter( 'acf/settings/show_admin', '__return_false' ); //隐藏“字段”菜单栏

        include_once( plugin_dir_path( __FILE__ ) . 'vendor/acf/acf.php' );

        $this->setup_options();

        add_action( 'admin_init', array( $this, 'add_acf_variables' ) );
    }

    public function update_acf_settings_path( $path ) {
        $path = plugin_dir_path( __FILE__ ) . 'vendor/acf/';
        return $path;
    }

    public function update_acf_settings_dir( $dir ) {
        $dir = plugin_dir_url( __FILE__ ) . 'vendor/acf/';
        return $dir;
    }

    public function add_acf_variables() {
        acf_form_head();
    }

    public function setup_options() {

//ACF START----------------------------------------------------------------

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_5f844451dba40',
    'title' => 'Woo for B2B Fields Group',
    'fields' => array(
        array(
            'key' => 'field_5f84446cb0c2c',
            'label' => '禁用购物系统',
            'name' => 'hide_cart',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '是否禁用WooCommerce自带的购物系统？',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_5f84464fd2538',
            'label' => '隐藏价格',
            'name' => 'hide_price',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '是否隐藏WooCommerce自带的价格标签？',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_5f8446bfd2539',
            'label' => '去掉nofollow属性',
            'name' => 'disable_nofollow',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '是否禁用WooCommerce自带的nofollow标签？',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_5f8460a9fc48d',
            'label' => '隐藏多余菜单栏',
            'name' => 'hide_menu',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '只留下WooCommerce中对B2B有用的功能',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_5f84991a4c606',
            'label' => '优化Elementor样式',
            'name' => 'elementor_css_optimize',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '是否让Elementor的商城样式和B2B更贴切？',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_5f85680ad8a5a',
            'label' => '启用精简模式',
            'name' => 'enable_minimize',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '把WordPress后台和B2B不相关的功能去掉',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_5f846e6b6434a',
            'label' => '启用首页透明页眉',
            'name' => 'overlay_header',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '是否在首页显示透明页眉？（当前仅支持Elementor）',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ),
            array(
                'param' => 'post_type',
                'operator' => '!=',
                'value' => 'post',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'left',
    'instruction_placement' => 'field',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));

endif;

//ACF END----------------------------------------------------------------

    }

    public function create_plugin_settings_page() {
        // Add the menu item and page
        $page_title = 'Woo for B2B';
        $menu_title = 'B2B';
        $capability = 'manage_options';
        $slug = 'woo_for_b2b';
        $callback = array( $this, 'plugin_settings_page_content' );
        $position = 100;
        add_submenu_page( 'woocommerce', $page_title, $menu_title, $capability, $slug, $callback );
    }

    public function plugin_settings_page_content() {
        do_action('acf/input/admin_head'); // Add ACF admin head hooks
        do_action('acf/input/admin_enqueue_scripts'); // Add ACF scripts

        $options = array(
            'id' => 'acf-form',
            'post_id' => 'options',
            'new_post' => false,
            'field_groups' => array( 'group_5f844451dba40' ),
            'return' => admin_url('admin.php?page=woo_for_b2b'),
            'html_before_fields' => '<h1 class="b2b-title">WooCommerce B<span style="color: #007cba;">2</span>B设置</h1>',
            'html_after_fields' => '<style>.acf-form-fields{display: flex; flex-wrap: wrap;} .b2b-title{flex-basis: 100%; margin-bottom: 30px;} .acf-form-submit{margin-top: 10px;} .acf-fields>.acf-field{flex-basis: 33.3%}</style>',
            'form' => true,
            'form_attributes' => array(
                'style' => 'margin: 50px;',
            ),
            'submit_value' => '保存更改',
        );
        acf_form( $options );
    }
}

new woo_for_b2b_Plugin();

include_once( 'php/functions.php' );
include_once( 'php/custom-dashboard.php' );