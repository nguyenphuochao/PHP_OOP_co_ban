<?php

require_once './connectDB.php';

$id = 2;

$sql = "SELECT * FROM products where id = :id"; // câu SQL query

$stmt = $pdo->prepare($sql); // chuẩn bị câu truy vấn

$stmt->bindParam(":id", $id); // dùng tham số để tránh SQL injection

$stmt->execute(); // thực thi câu truy vấn

$result = $stmt->fetch(); // lấy ra 1 dòng dữ liệu

print_r($result); // hiển thị data