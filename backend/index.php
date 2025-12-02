<?php
// backend/index.php

// Cho phép mọi tên miền truy cập (CORS) - Cực kỳ quan trọng khi tách host
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$data = [
    "status" => "success",
    "message" => "Xin chào! Đây là dữ liệu từ PHP Backend.",
    "time" => date("Y-m-d H:i:s")
];

echo json_encode($data);
?>