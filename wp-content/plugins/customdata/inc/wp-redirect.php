<?php
function redirect_by_ip() {
    $client_ip = $_SERVER['REMOTE_ADDR'];

    if (strpos($client_ip, '77.29') === 0) {
        wp_redirect('https://google.com');
        exit();
    }
}
add_action('template_redirect', 'redirect_by_ip');