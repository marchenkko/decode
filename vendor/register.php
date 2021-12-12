<?php
session_start();
require_once 'db.php';

$email = $_POST['email'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$passrep = $_POST['passrep'];

if($email === '' ||
    $name === '' ||
    $pass === '' ||
    $passrep === '' ||
    !filter_var($email,FILTER_VALIDATE_EMAIL)
){
$_SESSION['is_error'] = true;
$_SESSION['error_message'] = 'Проверте правильность введеных полей';
header('Location: /register.php');
}
$store_user = $db->prepare("INSERT INTO `user`(`email`,`name`,`password`) VALUES (:email,:name,:pass)");
$store_user->execute([
    "email" => $email,
    "name" => $name,
    "pass" => password_hash($pass, PASSWORD_DEFAULT),
]);
header('Location: /index.php');