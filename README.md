# Posts Column for Post Attachments

Posts Column for Post Attachments is a WordPress plugin that adds a column to the Posts list, showing any local images contained in the body content.

## Installation

1. Download the plugin zip file.
2. Extract the contents to the `wp-content/plugins/` directory.
3. Activate the plugin through the WordPress admin dashboard.

## Description

Posts Column for Post Attachments enhances the Posts list in the WordPress admin dashboard by displaying a custom column called "Attached Images." This column shows thumbnail images of any local attachments that are images and associated with the respective post.

### Custom Column

The plugin uses the `add_post_images_column` function to define the custom column in the Posts list. The column is named "Attached Images."

### Column Content

The `display_post_images_column` function populates the "Attached Images" column with thumbnail images of attachments associated with each post. The function retrieves attachments that are images and have the post as their parent. It then displays the thumbnail images in a size of 45x45 pixels.

### Custom Styles

The plugin also adds custom styles to constrain the width of the "Attached Images" column. The `add_style_col_post` function inserts CSS styles to set a maximum width of 250 pixels for the column.

## Author

This plugin was created by Robert Andrews. You can find more information about the author on their [website](https:/www.robertandrews.co.uk).

## License

This plugin is released under the GPL-2.0+ License. You can find the full license text [here](http://www.gnu.org/licenses/gpl-2.0.txt).
