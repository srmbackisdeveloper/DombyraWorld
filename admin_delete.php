<?php
	$title = $_POST['article_title'];

//DATABASE CONNECTION
$con = mysqli_connect("localhost" ,"root" ,"root" ,"users");

if($con == false){
    echo "DATABASE ERROR!";
}

$sql = "DELETE FROM atricle WHERE article_title = '$title'";

if ($con->query($sql) === TRUE) {
  ?>
	<script>
	window.alert('Вы УСПЕШНО удалили данную статью!')
	window.location.href = 'admin.php';
</script>

<?php

}

$con->close();

?>