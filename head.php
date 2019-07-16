<?php

//jQuery
$jquery = <<<EOT

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

EOT;

//Bootstrap
$bootstrap = <<<EOT

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

EOT;

//Shared JS
$sharedjs = <<<EOT

<script src="js/shared.js"></script>

EOT;

//Shared CSS
$sharedcss = <<<EOT

<link rel="stylesheet" href="css/shared.css">

EOT;

//FontAwesome JS
$fontawesome = <<<EOT

<script src="https://kit.fontawesome.com/e4b4be80ca.js"></script>

EOT;

echo $jquery,
    $bootstrap,
    $sharedjs,
    $sharedcss,
    $fontawesome;