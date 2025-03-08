<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['birthplace'] = $_POST['birthplace'];
    $_SESSION['birthdate'] = $_POST['birthdate'];
    $_SESSION['education'] = $_POST['education'];
    header("Location: cv.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
    <style>
        .container {
            width: 400px;
            margin: 50px auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Your Data</h2>
        <form method="POST">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Place of Birth:</label>
                <input type="text" name="birthplace" required>
            </div>
            <div class="form-group">
                <label>Date of Birth:</label>
                <input type="date" name="birthdate" required>
            </div>
            <div class="form-group">
                <label>Education History:</label>
                <textarea name="education" required></textarea>
            </div>
            <button type="submit">Generate CV</button>
        </form>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>