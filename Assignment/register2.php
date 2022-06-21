<?php

$connection = new mysqli('localhost', 'root', '' ,'alumni');

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$dob = $_POST['dob'];
$password = $_POST['password'];
// $cv = $_POST['cv'];
$social_type = $_POST['social_type'];
$social_handle = $_POST['social_handle'];
$email = $_POST['email'];
$number = $_POST['number'];

$fn = $_FILES['cv']['name'];
$tmp = $_FILES['cv']['tmp_name'];
move_uploaded_file($tmp, "Uploads/" .$fn);

$sql = "INSERT INTO registration(fname, mname, lname, username,
 dob, password, cv, social_type, social_handle, email, number)
VALUES('$fname', '$mname', '$lname', '$username', '$dob', 
'$password', '$cv', '$social_type', '$social_handle', '$email',
  '$number')";



if (mysqli_query($connection, $sql)){
    echo"Resgister successful!";
    header("Location: register.html", TRUE, 301);
}else{
    echo"you failed".mysqli_error($connection);
    exit();
}

?>