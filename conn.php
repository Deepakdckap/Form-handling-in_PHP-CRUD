<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=validation','admin','welcome');
} catch (Exception $e) {
    die($e->getMessage());
}



?>