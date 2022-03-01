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
add_filter( 'use_block_editor_for_post_type','ts_use_block_editor_for_post_type',10 ,2);

//add_filter('woocommerce_enqueue_style', '__return_false');
remove_action('woocimmerce_after_single_product_summary','woocommerce_output_product_data_tabs',10);
