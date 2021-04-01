<?php
require 'lib/password.php';
session_start();
include_once 'user.php';
include_once './util.php';
include_once 'dbconnect.php';
$conn = new DBConnector();
if (isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if ($email != "" && $password != "") {
        $user = new User();
        $user->setEmailAddress($email);
        $user->setPassword($password);
        // $user->getEmailAddress();
        // $user->getPassword();
        $_SESSION["email"] = $_POST["email"];
        echo $user->login($pdo);
    }
} else {
    header('location:./');
}
