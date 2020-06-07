<?php
@require("../requires/connection.php");

$user = $_POST['myusername']; 
$pass = $_POST['mypassword'];
 
$encryptpass= md5($pass);
 
$query = "SELECT * from tblusers where username='$user' and userpassword='$encryptpass'";
$result = mysqli_query($dbcon, $query);

$count = mysqli_num_rows($result);
if($count == 1){

    SESSION_START();
    $_SESSION['username'] = $user;
    header("Location: index.php");
    exit();
}
else{
    header("Location: ../logincheck.php");
}
?>