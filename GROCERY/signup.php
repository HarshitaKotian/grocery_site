<?php
$link = mysqli_connect("localhost", "root", "","grocery");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$user = $_POST['username'];
$password =  $_POST['password'];
$password2 = $_POST['cpassword'];
$number = $_POST['phonenumber'];
$Email=$_POST['email'];
// attempt insert query execution
if($password = $password2){
	$sql ="INSERT INTO customer VALUES ('','$user', '$password','$number', '$Email',NOW())";
	if(mysqli_query($link,$sql))	 
    header('Location: index.php');
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    header('Location: index1.html');
}
?>