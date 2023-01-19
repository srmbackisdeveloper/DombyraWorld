<!DOCTYPE html>
<html lang="ru">
<head> 
 <meta charset="UTF-8">
 <meta name="viewport" content="width-device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible", content="ie=edge">
 <link rel="stylesheet" href="C:/Users/77786/Desktop/л/OpenServer/domains/srmback.com/style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<?php 
    //DATABASE CONNECTION
$con = mysqli_connect("localhost" ,"root" ,"root" ,"users");

if($con == false){
    echo "DATABASE ERROR!";
}

?>


 <title> Ноты кюев </title>
</head>
<body>

<?php require "requier/header.php"  ?>

<div style="background-image: url(img/zagolovok.jpg)" class=" img-fluid position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light  ">
  <div  class="col-md-5 p-lg-5 mx-auto my-5">
 <title> Ноты кюев</title>
    <h1 class="display-4 font-weight-normal">Ноты кюев</h1>
  </div>
    <p class="lead font-weight-normal">Здесь можете скачать ноты кюев и учиться играть на домбре с с ними!</p>
  </div>
  <div  class="product-device shadow-sm d-none d-md-block"></div>
  <div  class="product-device product-device-2 shadow-sm d-none d-md-block">
    
  </div>
</div>

<?php 
include("checker.php");    ?>



<div class="container jumbotron mt-3">
  

    <h1 class=" text-dark">Список казахских кюев: </h1>
    
<form action="bubble_sort.php" method="POST">
    <input type="submit" class="dropdown-item d-flex align-items-center gap-2 py-2" value="Я - А">  </input>
</form>

<form action="bubble_sort_a_ya.php" method="POST">
    <input type="submit" class="dropdown-item d-flex align-items-center gap-2 py-2" value="А - Я">  </input>
</form>

    <br>

    <div>


<?php 
$checker = 0;



$checker = file_get_contents('checker.txt');




//
if($checker == 0){
$result = mysqli_query($con, "SELECT * FROM `kuy_notes`");
 while(($out = mysqli_fetch_array($result)))
    {?>

<h4><a class="font-weight-normal text-dark" download href="kuy/<?php echo $out['link'];?>.zip"> <?php echo $out['name']; ?> </a></h4>

<?php 
    }
}

//
if($checker == 1){

    function bubbleSort(array $array) {
        $array_size = count($array);
        for($i = 0; $i < $array_size; $i ++) {
            for($j = 0; $j < $array_size; $j ++) {
                if ($array[$i] > $array[$j]) {
                    $tem = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $tem;
                }
            }
        }
        return $array;
    }

$con = mysqli_connect("localhost" ,"root" ,"root" ,"users");
$result = mysqli_query($con, "SELECT * FROM `kuy_notes`");


 while(($out = mysqli_fetch_array($result)))
{
$names[] = $out['name'];
$links[] = $out['link'];
}



$sorted_names = bubbleSort($names);
$sorted_links = bubbleSort($links);

?>
    <script> </script>

<?php

$i = 0;
while($i < 8){  ?>
    <h4><a class="font-weight-normal text-dark" download href="kuy/<?php echo $sorted_links[$i];?>.zip"> <?php echo $sorted_names[$i];?></a></h4>
    <?php
    $i++;
}


}

?>

</div>
  </div>




<?php require "requier/footer.php"  ?>
</body>
</html>