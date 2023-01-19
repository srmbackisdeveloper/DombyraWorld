<!DOCTYPE html>
<html lang="ru">
<head> 
<!-- All symbols are correcly recognized by browser -->
<meta charset="UTF-8"> 
<!-- Adding the style library from Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- Webpage title -->
<title> Регистрация </title>
</head>
<body>


<?php
//Adding the header file data into the code
require "requier/header.php";?>
 
<br><br><br><br>

<!-- Registration form with detailed information about user -->
<form class="container" action="check.php" method="POST">

  <h1 class=" container  mb-3 font-weight-normal">Регистрация</h1>
  <input type="text"  class="container form-control" placeholder="Логин (уникальный 5-30 символ)" name="login">
  <input type="text" class="container mt-2 form-control" placeholder="Email" name="email">
  <input type="text" class="container mt-2 form-control" placeholder="Пароль (8-30 символ)" name="password">
  <input type="text" class="container mt-2 form-control" placeholder="Повторите пароль" name="password2">
  <button class="container mt-2 btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
  <!-- Link to Authorization page if user already has an account -->
  <p class=" container mt-1 mb-3 text-muted"> Если у вас уже есть аккаунт,<a href="signin.php"> Войти</a></p>

  <!-- Script for registration via social networks -->
  <script src="//ulogin.ru/js/ulogin.js"></script>
  <!-- Registration form via social networks -->
  <div id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2Fdombyraworld.com%2Fvk.php;mobilebuttons=0;"></div>
</form>

</body>
</html>