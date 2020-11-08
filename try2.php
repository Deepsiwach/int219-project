<?php
header('regsucceess.html');

$link = mysqli_connect("localhost", "root", "", "register");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$pass = mysqli_real_escape_string($link, $_REQUEST['psw']);
 

$sql = "INSERT INTO user (id,name,mobile, email,pass) VALUES (null,'$name', '$mobile','$email', '$pass')";
if(mysqli_query($link, $sql)){
    
    include('C:\xampp\htdocs\final project\regsuccess.html');
    die;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>