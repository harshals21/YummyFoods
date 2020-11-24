<?php
 

session_start();
header('location:login.html');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'yummyfoods');

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];


$s = " select * from signup where Username = '$Username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"Username Already exist";
}else{
	$reg= "insert into signup(Fname , Lname , Email , Username , Password) values ('$Fname' , '$Lname' , '$Email' , '$Username' , '$Password')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}

?>