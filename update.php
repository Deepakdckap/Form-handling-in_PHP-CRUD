<?php
require 'conn.php';

$upname=$_POST['first'];
$uplname=$_POST['last'];
$upemail=$_POST['mail'];
$upwebsite=$_POST['web'];
$upaddress=$_POST['addres'];
$update=$_POST['update'];
$gender = $_POST['gender'];



try {
    $updateData = $conn->prepare("UPDATE users SET name='$upname',L_name='$uplname',email_id='$upemail',website='$upwebsite',address='$upaddress',gender = '$gender' WHERE id =$update ");
    $updateData->execute();
    header('location:/grid.php');
} catch (PDOException $e) {
    die($e->getMessage());
}



?>