<?php
include_once 'user.php';
include_once './util.php';
include_once 'dbconnect.php';
$conn = new DBConnector();
$pdo = $conn->connectToDB();

$fullName = trim($_POST['fullname']);
$email = trim($_POST['email']);
$city = trim($_POST['city']);
$password = trim($_POST['password']);
if ((isset($fullName) && !empty($fullName)) && (isset($city) && !empty($city)) && (isset($email) && !empty($email)) && (isset($password) && !empty($password))) {
    $user = new User();
    $user->setEmailAddress($email);
    $user->setPassword($password);
    $user->setFullName($fullName);
    $user->setCity($city);
    echo $user->register($pdo);
    $data['success'] = true;

    $data['message'] = 'Success!';
} else {
    echo "Invalid input. Please enter all the input fields in form";
}