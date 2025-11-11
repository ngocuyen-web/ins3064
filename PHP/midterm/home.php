<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

require_once 'config.php';

// Lấy danh sách người hiến máu
$stmt = $pdo->query("SELECT * FROM donors");
$donors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Management - Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </header>

        <h2>Blood Donation List</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Blood Type</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donors as $index => $donor): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo htmlspecialchars($donor['name']); ?></td>
                    <td><?php echo htmlspecialchars($donor['blood_type']); ?></td>
                    <td><?php echo htmlspecialchars($donor['phone_number']); ?></td>
                    <td><?php echo htmlspecialchars($donor['status']); ?></td>
                    <td>
                        <a href="edit_donor.php?id=<?php echo $donor['id']; ?>">Edit</a>
                        <a href="delete_donor.php?id=<?php echo $donor['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="add_donor.php" class="btn">Add New Donor</a>
    </div>
</body>
</html>
