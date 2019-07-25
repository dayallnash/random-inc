<?php

require_once('../include/database.inc.php');

$response = false;

if (isset($_GET['businessImage'])) {
    $width = $height = 0;
    if (!empty($_POST['height']) && !empty($_POST['width'])) {
        $height = $_POST['height'];
        $width = $_POST['width'];
    }

    $database = new Database();

    $results = $database->query('SELECT file_path FROM image_repo');

    $resultCount = count($results);

    $randIndex = rand(0, $resultCount);

    return json_encode(['file_path' => $results[$randIndex]['file_path']]);
}