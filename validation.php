<?php
 

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'signup');

$Username = $_POST['Username'];
$Password = $_POST['Password'];


$s = " select * from user_info where Username = '$Username' && Password = '$Password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:index.html');	
}else{
    header('location:signup.html');
}

?>