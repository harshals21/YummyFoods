<?php


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'yummyfoods');


$email = $_POST['email'];



$s = " select * from newsletter where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"<h1>Your Email id Already submitted</h1> ";
}else{
	$reg= "insert into newsletter(email) values ('$email')";
	mysqli_query($con, $reg);
	echo "<h1>Email sent Successful</h1>";
}

?>
