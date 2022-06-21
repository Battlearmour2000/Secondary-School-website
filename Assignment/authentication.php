<?php

$conn = new mysqli('localhost', 'root', '' ,'alumni');

$email = $_POST['email'];  
$password = $_POST['password'];  
  
//to prevent from mysqli injection  
$email = stripcslashes($email);  
$password = stripcslashes($password);  
$email = mysqli_real_escape_string($conn, $email);  
$password = mysqli_real_escape_string($conn, $password);  

$sql = "select *from registration where email = '$email' and 
password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
    
if($count == 1){  
    echo "<h1><center> Login successful </center></h1>";  
    header("Location: Alumni.html", TRUE, 301);

}  
else{  
    echo "<h1> Login failed. Invalid email or password.</h1>";  

}

?>