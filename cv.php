<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Curriculum Vitae</title>
    <style>
        .container {
            width: 500px;
            margin: 50px auto;
            border: 1px solid #ccc;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        .info {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Curriculum Vitae</h2>
        <div class="info">
            <strong>Email:</strong> <?php echo $_SESSION['email']; ?>
        </div>
        <div class="info">
            <strong>Name:</strong> <?php echo $_SESSION['name']; ?>
        </div>
        <div class="info">
            <strong>Place of Birth:</strong> <?php echo $_SESSION['birthplace']; ?>
        </div>
        <div class="info">
            <strong>Date of Birth:</strong> <?php echo $_SESSION['birthdate']; ?>
        </div>
        <div class="info">
            <strong>Education History:</strong>
            <p><?php echo nl2br($_SESSION['education']); ?></p>
        </div>
        <a href="form.php">Edit Data</a> | 
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>