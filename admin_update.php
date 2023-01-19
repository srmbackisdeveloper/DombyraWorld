<?php
	$title = $_POST['article_title'];
	$new_text = $_POST['article_new_text'];

//DATABASE CONNECTION
$con = mysqli_connect("localhost" ,"root" ,"root" ,"users");

if($con == false){
    echo "DATABASE ERROR!";
}

$sql = "UPDATE atricle SET article_text='$new_text' WHERE article_title = '$title'";

if ($con->query($sql) === TRUE) {
  ?>
<script>
	window.alert('Вы УСПЕШНО обновили данную статью!')
	window.location.href = 'admin.php';
</script>

<?php

}

$con->close();

?>