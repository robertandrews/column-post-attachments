<?php
/**
 * Plugin Name: Posts Column for Post Attachments
 * Plugin URI: https:/www.robertandrews.co.uk
 * Description: Adds a column to the Posts list which shows any local images contained in the body content.
 * Version: 1.0.0
 * Author: Robert Andrews
 * Author URI: https:/www.robertandrews.co.uk
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Define custom column for images in Posts list
function add_post_images_column($columns)
{
    $columns['post_images'] = 'Attached Images';
    return $columns;
}
add_filter('manage_posts_columns', 'add_post_images_column');

// Define content for custom column in Posts list
function display_post_images_column($column_name, $post_id)
{
    if ($column_name == 'post_images') {
        $attachments = get_children(array(
            'post_parent' => $post_id,
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
        ));

        foreach ($attachments as $attachment) {
            $thumbnail_url = wp_get_attachment_image_url($attachment->ID, 'thumbnail');
            echo '<img src="' . esc_attr($thumbnail_url) . '" width="45" height="45" />';

        }
    }
}
add_filter('manage_posts_custom_column', 'display_post_images_column', 10, 2);

// Add custom styles to constrain width of column
add_action('admin_head', 'add_style_col_post');
function add_style_col_post()
{
    echo '<style>.column-post_images { max-width: 250px; }</style>';
}