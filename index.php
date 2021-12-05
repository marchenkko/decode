<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="add_users.php">
    <lable>Name: </lable> <input id="name" type="text" name="name">
    <br>
    <br>
    <lable>Age: </lable> <input id="age" type="text" name="age">
    <br>
    <br>
    <select id="sex" name="sex">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Нажми на меня">
</form>
</body>
</html>