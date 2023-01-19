<!DOCTYPE html>
<html lang="ru">
<head> 
<!-- All symbols are correcly recognized by browser -->
<meta charset="UTF-8"> 
<!-- Adding the style library from Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- Background image -->
<style>
   body {
    background-image: url(img/dombyra.jpg);
   }
</style>

<!-- Webpage title -->
<title> Обучение игре на домбыре </title>
</head>

<body>
<?php 
//Adding the header file data into the code
require "requier/header.php";?>


<!-- Section of webpage heading -->
<div style="background-image: url(img/zagolovok.jpg)" class=" img-fluid position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div  class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Обучение игре на домбыре</h1>
    <p class="lead font-weight-normal">Ниже вам предложены 4 разделов, в которое входит 3 уровня домбриста и раздел "основные ошибки" <br>
    Выберите свой уровень и начинайте занятие! </p>
  </div>
</div>

<!-- Link to page 'Основные ошибки' -->
<div class="img-thumbnail container jumbotron mt-3">
    <h1><a class=" text-dark" href="common_err.php">Основные ошибки
    </a></h1>
  </div>

<!-- Link to page 'Уровень: Новичок' -->
<div class="container jumbotron mt-3">
    <h1><a class=" text-dark" href="for_starters.php">Уровень: Новичок
    </a></h1>
  </div>

<!-- Link to page 'Уровень: Средний' -->
<div class="img-thumbnail container jumbotron mt-3">
    <h1><a class=" text-dark" href="for_middle.php">Уровень: Средний
    </a></h1>
  </div>

<!-- Link to page 'Уровень: Профессионал' -->
<div class="container jumbotron mt-3">
    <h1><a class=" text-dark" href="for_pro.php">Уровень: Профессионал
    </a></h1>
  </div>

<?php 
//Adding the footer file data into the code
require "requier/footer.php";?>

</body>
</html>