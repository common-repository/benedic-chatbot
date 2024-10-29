<?php
/*
 * Plugin Name: Benedic Chatbot
 * Plugin URI: https://benedic.chat
 * Description: Benedic is a chatbot for your website that works with the OpenAI engine, the same one that runs ChatGPT, but responds to users with your business information. No configuration is required, just install it and if you have a Benedic.chat account and you have correctly specified your domain, the widget will be automatically displayed on your website.
 * Version: 1.0
 * Author: Benedic
 * License: GPL
*/

function benedic_script() {
    wp_enqueue_script('benedic', 'https://cdn.benedic.chat/lib/js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'benedic_script');
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'benedic_enlace_panel');
function benedic_enlace_panel($enlaces) {
    $nuevo_enlace = '<a href="https://panel.benedic.chat" target="_blank"><b>Panel de Benedic</b></a>';
    array_unshift($enlaces, $nuevo_enlace);
    return $enlaces;
}