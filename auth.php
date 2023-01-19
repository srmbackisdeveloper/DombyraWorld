<?php
//Assigning a login value to variable $login
$login = $_POST['login'];
//Assigning a password value to variable $password
$password = $_POST['password'];


//If login value length is less than 5 or more than 30 
if(mb_strlen($login) < 5 || mb_strlen($login) > 30)
{
	?>
<script>
	//Showing an error message that login length check failed
	window.alert('Недопустимая длина логина')
	//Redirecting to Authorization page
	window.location.href = 'signin.php';
</script><?php
	exit;
}

//If password value length is less than 8 or more than 30 
if(mb_strlen($password) < 8 || mb_strlen($password) > 30)
{
	?>
<script>
	//Showing an error message that password length check failed
	window.alert('Недопустимая длина пароля')
	//Redirecting to Authorization page
	window.location.href = 'signin.php';
</script>
	<?php
	exit; 
}


//Database connection with host name, login, password and database name
$con = new mysqli("localhost" ,"root" ,"root" ,"users");
//Query to receive all the data from table 'users', column 'password' to check if entered values match the values in database
$result = $con -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result -> fetch_assoc();

//If login value is not found in database
if(count($user)==0)
{
	?>
<script>
	//Showing an error message that there is no such an account login
	window.alert('Не существует такой пользователь!')
	//Redirecting to Authorization page
	window.location.href = 'signin.php';
</script><?php
	exit();
}

//Setting a cookie file, containing entered true values of login and password, that lasts 3600 seconds
setcookie('user', $user['login'], time() + 3600, "/");
$con -> close();
 
//Directing to Home page
header('Location: /index.php');
