<?php
//adding new variables
	$title = $_POST['article_title'];
	$text = $_POST['article_text'];

//database connection
$con = mysqli_connect("localhost" ,"root" ,"root" ,"users");

//check if the database works or not
if($con == false){
    echo "DATABASE ERROR!";
}
	//SQL query to adding data
	$stmt = $con->prepare("INSERT INTO atricle(article_title, article_text) VALUES(?, ?)");
	$stmt->bind_param("ss", $title, $text);
	$stmt->execute();

?>
	<script>
	window.alert('Вы УСПЕШНО добавили новую статью!')
	window.location.href = 'admin.php';
</script>

<?php
	$stmt->close();
	$con->close();

?>