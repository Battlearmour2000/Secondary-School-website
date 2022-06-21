<?php

$connection = new mysqli('localhost', 'root', '' ,'alumni');

$aname = $_POST['aname'];
$yoe = $_POST['yoe'];
$yog = $_POST['yog'];
$occupation = $_POST['occupation'];
$pae = $_POST['pae'];
$pag = $_POST['pag'];
$ftib = $_POST['ftib'];
$results = $_POST['results'];
$email = $_POST['email'];
$address = $_POST['address'];
$contacts = $_POST['contacts'];

$sql = "INSERT INTO alumni_info(aname, yoe, yog, occupation, pae, pag,
ftib, results, email, address, contacts)VALUES('$aname', '$yoe', '$yog',
 '$occupation', '$pae', '$pag', '$ftib', '$results', '$email', '$address', '$contacts')";

if (mysqli_query($connection, $sql)){
    echo"Resgister successful! wait for redirect";
    header("Location: Alumni.html", TRUE, 301);
}else{
    echo"you failed".mysqli_error($connection);
    exit();
}

?>