<?php

$response = false;

$count = rand(3, 10);

if (isset($_GET['randomPolys'])) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.noopschallenge.com/polybot?count='.$count.'&minSides=4&maxSides=9&width=100&height=100');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);
};

if ($response) {
    header('Content-Type: application/json');
    echo $response;
};
