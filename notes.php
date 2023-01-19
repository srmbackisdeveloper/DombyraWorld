<!DOCTYPE html>
<html lang="ru">
<head> 
 <meta charset="UTF-8">
 <meta name="viewport" content="width-device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible", content="ie=edge">
 <link rel="stylesheet" href="C:/Users/77786/Desktop/л/OpenServer/domains/srmback.com/style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
   body {
    background-image: url(img/dombyra.jpg); /* Путь к фоновому изображению */
   }
  </style>

 <title> Ноты </title>
</head>
<body>

<?php require "requier/header.php"  ?>

<div style="background-image: url(img/zagolovok.jpg)" class=" img-fluid position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light  ">
  <div  class="col-md-5 p-lg-5 mx-auto my-5">
 <title> Ноты</title>
    <h1 class="display-4 font-weight-normal">Ноты </h1>
  </div>
  <div  class="product-device shadow-sm d-none d-md-block"> </div>
  <div  class="product-device product-device-2 shadow-sm d-none d-md-block">
    
  </div>
</div>

<div>
  	<div class="img-thumbnail container jumbotron mt-3">
    <h1><a class=" text-dark" href="notes_exp.php" >Как понимать ноты?
    </a></h1>
  </div>

  <div class="img-thumbnail container jumbotron mt-3">
    <h1><a class=" text-dark" href="notes_kuys.php">Ноты кюев
    </a></h1>
  </div>
  <div>
    <div class="img-thumbnail container jumbotron mt-3">
    <h1><a class=" text-dark" href="notes_songs.php">Ноты современных песен
    </a></h1>
  </div>
</div>



<?php require "requier/footer.php"  ?>
</body>
</html>