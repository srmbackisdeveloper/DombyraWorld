<?php
//Assigning a login value to variable $login
$login = $_POST['login'];
//Assigning an email value to variable $email
$email = $_POST['email'];
//Assigning a password value to variable $password
$password = $_POST['password'];
//Assigning a repeated password value to variable $password2 --- checking password because user can make mistake 
$password2 = $_POST['password2'];

//If password confirmation through double entering is failed
if($password != $password2)
{
	?>
<script>
	//Showing an error message that password confirmation failed
	window.alert('Повторный пароль введён не верно')
	//Redirecting to registration page
	window.location.href = 'reg.php';
</script>   <?php
	exit;
}

//If password confirmation through double entering is NOT failed
else{
//If login value length is less than 5 or more than 30 
if(mb_strlen($login) < 5 || mb_strlen($login) > 30)
{
	?>  
<script>
	//Showing an error message that login length check failed
	window.alert('Недопустимая длина логина')
	//Redirecting to registration page
	window.location.href = 'reg.php';
</script>   <?php
	exit;
}

//If password value length is less than 8 or more than 30 
if(mb_strlen($password) < 8 || mb_strlen($password) > 30)
{
	?>  
<script>
	//Showing an error message that password length check failed
	window.alert('Недопустимая длина пароля')
	//Redirecting to registration page
	window.location.href = 'reg.php';
</script>   <?php
	exit;
}


//Database connection with host name, login, password and database name
$con = new mysqli("localhost" ,"root" ,"root" ,"users");
//Inserting entered values into database table 'users'
$con -> query("INSERT INTO `users` (`login`, `email`, `password`) VALUES('$login','$email', '$password')");
//Close a connection after insertion
$con -> close();

//Directing to Authorization page
header('Location: /signin.php');
}