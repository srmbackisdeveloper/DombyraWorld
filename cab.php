<?php
$name = filter_var(trim($_POST['name']), 
FILTER_SANITIZE_STRING);
$surname =filter_var(trim($_POST['surname']),
FILTER_SANITIZE_STRING);
$age =filter_var(trim($_POST['age']),
FILTER_SANITIZE_STRING);
$level =filter_var(trim($_POST['level']),
FILTER_SANITIZE_STRING);

//DATABASE CONNECTION
$con = new mysqli("localhost" ,"root" ,"root" ,"users");
 $con -> query("INSERT INTO `person` (`name`, `surname`, `age`, `level`) VALUES ('$name','$surname','$age' '$level')");

 $con -> close();
 
 header('Location: /index.php');
