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
echo "New records created successfully";
