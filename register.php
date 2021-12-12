<?php
session_start();
if(isset($_SESSION['auth'])&& $_SESSION['auth'] === true){
    header('Location: /profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form action="vendor/register.php" method="post">
    <label for="email">Адрес электронной почты:</label>
    <input type="text" id="email" name="email">
    <br>
    <br>
    <label for="name">Ваше имя:</label>
    <input type="text" id="name" name="name">
    <br>
    <br>
    <label for="pass">Пароль:</label>
    <input type="password" id="pass" name="pass">
    <br>
    <br>
    <label for="passrep">Подтверждение пароля:</label>
    <input type="password" id="passrep" name="passrep">
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Авторизация</button>

        <?php
 if(isset($_SESSION['is_error']) && $_SESSION['is_error'] === true ) {
        ?>
     <div class="alert alert-danger" role="alert">
<?= $_SESSION['error_message'] ?>
    </div>
    <?php
 }
 unset($_SESSION['is_error']);
 unset($_SESSION['error_message']);
    ?>
</form>
</body>
</html>
