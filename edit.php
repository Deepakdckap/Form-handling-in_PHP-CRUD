<?php
require 'conn.php';

// $name = $_POST['fname'];
$id = $_POST['edit'];
// echo $id;

try {
    $update=$conn->prepare("SELECT * FROM users WHERE id = $id");
    $update->execute();
    $values=$update->fetchAll(PDO::FETCH_OBJ);
    // var_dump($values);

} catch (PDOException $e) {
    die($e->getMessage());
}

// echo "thank you";
require 'update.html';
?>