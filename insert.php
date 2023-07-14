<?php
require 'conn.php';


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$website = $_POST['website'];
$address = $_POST['address'];
$gender = $_POST['gender'];



try {
    $insert = $conn->prepare("INSERT INTO users(name,L_name,email_id,website,address,gender)
     VALUES('$fname','$lname','$email','$website','$address','$gender')");

     $insert->execute();
     header('location:/grid.php');




} catch (PDOException $e) {
    die("unable to insert".$e->getMessage());
}

require 'form.html';
// header('location: ./index.html');



?>