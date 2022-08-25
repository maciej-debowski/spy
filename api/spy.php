<?php
    $data = file_get_contents("spy.png");

    $ip_address = $_SERVER['REMOTE_ADDR'];
    $forward = $_SERVER['HTTP_X_FORWARDED_FOR'];

    $content = "IP address: $ip_address \n Forward: $forward \n\n JSON stringified \$_SERVER " . json_encode($_SERVER) . " \n\n JSON Stringified Cookies: " . json_encode($_COOKIE);

    file_put_contents("../data/data-".time().".txt", $content);

    // Showing image

    header('Content-Type: image/png');
    echo $data;