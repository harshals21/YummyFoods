<?php

$server_name="localhost";
$username= "root";
$password="";
$database_name="signup";


// Create connection
$conn=mysqli_connect($server_name, $username,$password,$database_name);




// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    
$Fname = $_POST['Fname'];
$Lname= $_POST['Lname'];
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];


//for inserting the values to mysql database

$sql_query ="INSERT INTO user_info(Fname, Lname, Email, Username, Password)
VALUES ('$Fname','$Lname','$Email','$Username','$Password')";

if(mysqli_query($conn, $sql_query))
{
    echo "Registration Successfully....";
}
else
{
    echo "Error: " .$sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
print_r(error_get_last());
?>