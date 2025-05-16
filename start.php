<?php
include '../webt/loginController.php';

$error = isset($_GET['error']) ? $_GET['error'] : '';
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <form method="POST" action="logController.php">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>