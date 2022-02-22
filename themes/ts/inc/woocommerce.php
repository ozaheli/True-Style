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

}
add_filters( 'use_block_editor_for_post_type','ts_use_block_editor_for_post_type');
