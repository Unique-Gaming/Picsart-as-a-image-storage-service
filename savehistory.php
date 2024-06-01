<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['userid'];
    $imageUrl = $_POST['imageurl'];

    if (!is_dir('History')) {
        mkdir('History');
    }

    $filePath = "History/$userId.json";

    $data = [];
    if (file_exists($filePath)) {
        $data = json_decode(file_get_contents($filePath), true);
    }

    $data[] = $imageUrl;
    file_put_contents($filePath, json_encode($data));
}
?>