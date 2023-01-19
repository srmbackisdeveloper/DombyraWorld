<!DOCTYPE html>
<html lang="ru">
<head> 
 <meta charset="UTF-8">
 <meta name="viewport" content="width-device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible", content="ie=edge">
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

 <title> Личный кабинет </title>
</head>
<body>
<?php require "requier/header.php"  ?>

<div align="center " class=" container d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
<h3 align="center" style="color: black" class="container">Ваш личный кабинет</h3>   
</div>

<table style="width: 600px" align="center">
<form class="container" action="cab.php" method="POST">
  
  <h1 align="center" class=" container  mb-3 font-weight-normal">Введите ваши данные</h1>
 <th>
  <input  type="text"  class="container form-control " placeholder="Ваше имя "name="name" >
  <input  type="text"  class="container form-control mt-2" placeholder="Ваша фамилия "name="surname" >
  <input  type="text"  class="container form-control mt-2" placeholder="Ваш возраст "name="age" >
  <input  type="text"  class="container form-control mt-2" placeholder="Ваш уровень "name="level" >  
  <button class="container mt-2 btn btn-lg btn-primary btn-block" type="submit">Сохранить</button>
  </th>
</form>
</table>

<table align="center" width="300px">
      <th>
      	

      <a align="center" class="container btn btn-outline-primary mt-3" href="exit.php">Выйти</a>
  </th>
</table>









</body>
 </html>