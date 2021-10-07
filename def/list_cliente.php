<?php
include('connection.php');


    $sql = $conn->prepare("SELECT * FROM clientes WHERE id=".$_GET['id']." ");
    $sql -> execute();

    $fetchClientes = $sql->fetchAll();

    foreach($fetchClientes as $key => $value){
  
    }

?>

