<?php
require_once 'config.php';

// Tạo một tài khoản người dùng mới (chỉ làm ví dụ, bạn có thể làm việc với form thêm người dùng)
$username = "admin";  // Tên người dùng mới
$password = "12345678";  // Mật khẩu mới

// Mã hóa mật khẩu trước khi lưu
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Thêm người dùng vào cơ sở dữ liệu
$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->execute([$username, $hashed_password]);

echo "User added successfully!";
?>
