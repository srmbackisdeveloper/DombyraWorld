<!DOCTYPE html>
<html lang="en" dir="ltr">

  <body>
        <form action="" method="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
          </div>
<div class="field">
            <input type="submit" value="GET NEW PASSWORD">
          </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email =$_POST["email"];
  $con = new mysqli("localhost" ,"root" ,"root" ,"db");
  $email_check = "SELECT * FROM user_info WHERE email = '$email'";
  $res = mysqli_query($con, $email_check);
  if(mysqli_num_rows($res) == 0){
    ?>
    <script>
    window.alert("Email that you have entered does not exist!")
    window.location.href = '/reg.php';
    </script>
    <?php
      exit();
  }
  $newpassword=randomPassword();
  echo "New password sended to your email address";
  $to = $email;
$subject = "New password";
$txt = $newpassword;

try {
    mail($to,$subject,$txt,"");
    $sql = "UPDATE user_info SET password= '$newpassword' WHERE email='$email'";

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $con->error;
}
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

}
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
 ?>

  </body>
</html>