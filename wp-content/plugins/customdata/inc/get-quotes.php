<?php

function fetch_a_quote() {
    $api_url = 'https://api.kanye.rest/';

    $response = wp_remote_get($api_url);

    if (is_wp_error($response)) {
        return 'Error: Unable to fetch quotes data.';
    }

    $body = wp_remote_retrieve_body($response);

    $quote_data = json_decode($body, true);

    return $quote_data;
}
add_shortcode('cdmt_quotes',function(){
    echo '<ol>';
    for ($i=0; $i <5 ; $i++) { 
        $quote = fetch_a_quote();
        # code...
    ?>
        <li class="quote">
            <blockquote>
                <?php echo $quote['quote'] ?>
            </blockquote>
        </li>
    <?php
    }
    echo '</ol>';
});