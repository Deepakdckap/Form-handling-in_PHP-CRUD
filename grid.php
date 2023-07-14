<?php
require 'conn.php';

try {
    $select=$conn->prepare("SELECT * FROM users");
    $select->execute();
    $values=$select->fetchAll(PDO::FETCH_OBJ);
    // var_dump($select->fetchAll(PDO::FETCH_OBJ));
    // header('location:/form.html');
} catch (PDOException $e) {
    die($e->getMessage());
}
// echo "thank you";

require 'grid.html';

// foreach ($values as $value){
//     echo $value->name."\n";
// }


?>
<!-- <button><a href="./open.html">BACK TO HOME</a></button> -->