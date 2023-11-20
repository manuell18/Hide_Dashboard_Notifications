<?php
/*
Plugin Name: Hide Notifications Plugin
Description: This plugin hides plugin offers and notifications from the WordPress dashboard.
Version: 1.0
Author: Emmanuel Milimo
*/
// Enqueue scripts
function hide_notifications_scripts() {
    wp_enqueue_script('hide-notifications', plugin_dir_url(__FILE__) . 'js/hide-notifications.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'hide_notifications_scripts');

// JavaScript to hide notifications
function hide_notifications_script() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Replace '.notice' with the appropriate class/ID of the notifications
            $('.notice').hide(); // This will hide all notifications with class 'notice'
        });
    </script>
    <?php
}
add_action('admin_footer', 'hide_notifications_script');

?>