<?php
/**
 * woocommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package True_Style
 */
function ts_use_block_editor_for_post_type($use_block_editor,$post_type ){
    if ('product' === $post_type) {
        $use_block_editor = true;
    }
    return $use_block_editor;

}
//add_filter( 'use_block_editor_for_post_type','ts_use_block_editor_for_post_type',10 ,2);

//add_filter('woocommerce_enqueue_style', '__return_false');

//add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 4);
function ts_woocommerce_single_product_summary(){
    echo '<p style="color:#ff5252"><b>You\'ll love our products!</b></p>';
}
add_action('woocommerce_single_product_summary','ts_woocommerce_single_product_summary',6);

remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs',10);

function ts_add_content(){
    echo '<div class="content">'. get_the_content() . '</div>';
}
add_action('woocommerce_single_product_summary','ts_add_content',10);