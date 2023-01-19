<?php
//DATABASE CONNECTION
$con = new mysqli("localhost" ,"root" ,"root" ,"users");
 $con -> query("INSERT INTO `users` (`login`, `password`) VALUES('$login', '$password')");