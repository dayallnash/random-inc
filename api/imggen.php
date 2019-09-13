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

    $filePath = '/assets/img/placeholderimg.jpg';

    if (!empty($results)) {
        $resultCount = count($results);
        $randIndex = rand(0, $resultCount);

        $filePath = $results[$randIndex]['file_path'];
    }

    header('Content-Type: application/json');
    echo json_encode(['file_path' => $filePath]);
}