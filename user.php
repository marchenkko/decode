<?php

$dsn = 'mysql:dbname=users;host=localhost';
$user='root';
//3
$connection = new PDO ($dsn,$user,null);
//$connection->exec('DELETE FROM user WHERE id = 2');


//$connection->exec ("INSERT INTO user (name,age) VALUES ('Ivan' , 17)");

//$connection->exec('UPDATE user SET name = "vasya" , age = 17 WHERE id = 1');

$sql = $connection->prepare('SELECT * FROM user');
$sql->execute();
$users= $sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $item){
    echo $item['name'];
    echo $item['age']."\n";
}