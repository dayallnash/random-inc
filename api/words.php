<?php

$response = false;

if (isset($_GET['companyName'])) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.noopschallenge.com/wordbot?count=2');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $responseArr = json_decode($response);

    $companyWords = [
        'Corp.',
        'Inc.',
        'Ltd.',
        'Company',
        'brought to you by Elon Musk'
    ];

    $randIndex = rand(0, 4);

    $responseArr->words[] = $companyWords[$randIndex];

    $response = json_encode($responseArr);
}

if ($response) {
    header('Content-Type: application/json');
    echo $response;
}