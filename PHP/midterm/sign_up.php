<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash('12345678', PASSWORD_DEFAULT);  // Mã hóa mật khẩu '12345678'
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $blood_code = $_POST['blood_code'];
    $blood_type = $_POST['blood_type'];
    $phone_number = $_POST['phone_number'];
    $status = 'Active'; // Mặc định là 'Active'

    // Kiểm tra nếu email đã tồn tại
    $stmt = $pdo->prepare("SELECT * FROM users_and_donors WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        $error = "Email already exists!";
    } else {
        // Thêm người dùng vào cơ sở dữ liệu
        $stmt = $pdo->prepare("INSERT INTO users_and_donors (username, email, password, first_name, last_name, blood_code, blood_type, phone_number, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$username, $email, $password, $first_name, $last_name, $blood_code, $blood_type, $phone_number, $status]);
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Donor Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Create an Account</h2>
        <form action="sign_up.php" method="POST">
            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="text" name="first_name" placeholder="First Name" required><br>
            <input type="text" name="last_name" placeholder="Last Name" required><br>
            <input type="text" name="blood_code" placeholder="Blood Code" required><br>
            <input type="text" name="blood_type" placeholder="Blood Type (e.g. O, A, B, AB)" required><br>
            <input type="text" name="phone_number" placeholder="Phone Number" required><br>
            <button type="submit">Create Account</button>
        </form>
        <p>Already have an account? <a href="login.php">Sign In</a></p>
    </div>
</body>
</html>

