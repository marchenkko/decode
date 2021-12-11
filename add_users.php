<?php
include 'db.php';
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$stmt = $connection->prepare("INSERT INTO users (name, age ,sex )
    VALUES (:name, :age , :sex)");
$stmt->bindValue(':name', $name);
$stmt->bindValue(':age', $age);
$stmt->bindValue(':sex', $sex);


$stmt->execute();

$userid=$connection->lastInsertId();
$serial=rand(1,100000);
$number=rand(1,10000);
$date_int= rand(1262055681,1262055681);
$date = date("Y-m-d H:i:s",$date_int);
$stmt = $connection->prepare("INSERT INTO passport (user_id, serial,number,date) 
VALUES (:user_id,:serial,:number,:date )");
$stmt->bindValue(':user_id', $userid);
$stmt->bindValue(':serial',$serial);
$stmt->bindValue(':number',$number);
$stmt->bindValue(':date',$date);
$stmt->execute();

echo "New records created successfully";
