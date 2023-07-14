<?php
require 'conn.php';


$id=$_POST['del'];

try {
    $del=$conn->prepare("DELETE FROM users WHERE id = $id");
    $del->execute();
} catch (PDOException $e) {
    die($e->getMessage());
}
header('location: ./grid.php');
// require 'grid.html';

?>