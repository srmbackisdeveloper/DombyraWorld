<!DOCTYPE html>
<html lang="ru">
<head> 
<!-- All symbols are correcly recognized by browser -->
<meta charset="UTF-8"> 
<!-- Adding the style library from Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- Webpage title -->
<title> Вход </title>
</head>

<body>
<?php
//Adding the header file data into the code
require "requier/header.php";?>

<br><br><br><br>

<!-- Authorization form for entering data about user -->
<form class="container" action="auth.php" method="POST">
  <h1 class="container mb-3 font-weight-normal">Вход </h1>
  <input type="text" class="container form-control" placeholder="Логин (5-30 символ)"name="login">
  <input type="text" class="container mt-2 form-control" placeholder="Пароль (8-30 символ)" name="password">
  <a class="container mt-1 mb-3" href="resign.php">Забыли пароль?</a>         
  <button class="container mt-2 btn btn-lg btn-primary btn-block" type="submit">Вход</button>

  <!-- Link to Registration page if user has no account -->
  <p class="container text-muted">Если вы тут впервые, 
  <a href="reg.php">Регистрация</a><a style="margin-left: 690px;" class="container text-muted" href="admin_signin.php">Админ панель</a></p>
</form>

</body>
</html>