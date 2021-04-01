<?php
//session_start();
include('processlogin.php');
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
include_once 'user.php';

include_once 'dbconnect.php';
$con = new DBConnector();
$pdo = $con->connectToDB();
if (isset($_POST['Submit'])) {
    //change password
    $email = $_SESSION['email'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $user = new User();
    $user->setEmailAddress($email);
    $user->setPassword($password);
    $user->setPass1($password1);
    $user->setPass2($password2);

    echo $user->changePassword($pdo);
}
