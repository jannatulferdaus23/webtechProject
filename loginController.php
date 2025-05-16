<?php
include '../view/LogincheckController.php';

session_start();

$error = "";

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    include '../view/LogincheckController.php';
    $error = "Invalid username or Password!";
} elseif (isset($_POST['username']) || isset($_POST['password'])) {
    $error = "username and Password are required!";
}
?>