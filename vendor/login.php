<?php
session_start();
require_once 'db.php';
$email = $_POST['email'];
$password = $_POST['password'];
$user = $db->prepare("SELECT * FROM `user` WHERE `email` = :email");
$user->execute([
    "email" => $email

]);
$user = $user->fetch();
if(!$user){
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = 'Пользователь не найден';
    header('Location: /index.php');
}
if(password_verify($password,$user["password"]) === true) {
    $_SESSION["auth"] = true;
    $_SESSION["user"] = [
        "id" => $user["id"],
        "name" => $user["name"],
        "email" => $user["email"]
    ];
     header('Location: /profile.php');
}else{
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = 'Не верный пароль';
    header('Location: /index.php');
}
