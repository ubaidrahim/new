<?php

function hs_give_me_coffee() {
    $api_url = 'https://coffee.alexflipnote.dev/random.json';

    $response = wp_remote_get($api_url);

    if (is_wp_error($response)) {
        return 'Error: Unable to fetch coffee data.';
    }

    $body = wp_remote_retrieve_body($response);

    $coffee_data = json_decode($body, true);

    return $coffee_data;
}
add_shortcode('cdmt_coffee',function(){
    $coffee = hs_give_me_coffee();
    ?>
    <img src = "<?php echo $coffee['file'] ?>" alt = "Coffee">
<?php
});