<?php
$json = [];

$data = isset($_POST) ? $_POST : [];

if (!$data) {
    $json['error']['warning'] = "Please check form carefully";
}

if (!$json) {
    foreach($data as $key => $d) {
        if (empty($data[$key])) {
            $json['error'][$key] = "This field is required!";
        }
    }
}

if (!$json) {
    $json['success'] = "OK!";
}

header('Content-Type: application/json');
echo json_encode($json);