<?php
 

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'yummyfoods');

$Username = $_POST['Username'];
$Password = $_POST['Password'];


$s = " select * from signup where Username = '$Username' && Password = '$Password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:blog.html');	
}else{
    header('location:signup.html');
}

?>