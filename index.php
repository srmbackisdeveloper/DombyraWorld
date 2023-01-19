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
<title>Домбыра World</title>
</head>

<body>
<?php 
//Adding the header file data into the code
require "requier/header.php";

//Database connection with host name, login, password and database name
$con = mysqli_connect("localhost" ,"root" ,"root" ,"users");

//If connection is failed, show an error message
if($con == false){
    echo "ERROR!";
}

//Query to receive all the data from table 'article'
$result = mysqli_query($con, "SELECT * FROM `atricle`");
?>

<!-- Section of webpage heading -->
<div style="background-image: url(img/zagolovok.jpg)" class=" img-fluid position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div  class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Домбыра World</h1>
    <p class="lead font-weight-normal">Добро пожаловать в Домбыра World!</p>
  </div>
</div>


<?php
//Showing all the data from table 'article', columns 'article_title' and 'article_text'
while(($out = mysqli_fetch_array($result)))
{?>
    <div class="container jumbotron mt-3">
    <h1><a class=" text-dark"><?php echo $out['article_title']; ?></a></h1>
    <p class="lead"><?php echo $out['article_text']; ?><br>
    </p>
  </div>
  <?php
}
?>

<!-- Section of footer of website -->
<footer style="background-color: #ffffff;" class="text-muted">
  <div class="container">
    <!-- Link to admin page -->
    <a class="container" href="admin.php"> Admin панель </a>
    <p> Работа Жумажана Сырымбека</p>
    <!-- Link to social networks of company -->
    <p> <a href="https://instagram.com/srmback/">Следите за новостями автора</a> или <a href="https://vk.com/dombyraworld">Войдите в наше сообщество!</a>.</p>
  </div>
</footer>

</body>
</html>