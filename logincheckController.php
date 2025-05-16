<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $session = new loginController();
        $session->submit($username, $password);
        break;

    default:
        header("Location:loginView.php");
        exit;
}
?>