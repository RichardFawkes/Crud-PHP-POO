<?php
include('connection.php');


//DELETE.
if(isset($_GET['id'])){
    $sql = $conn->prepare("DELETE FROM clientes WHERE id=:id ");
    $sql->bindParam(':id', $_GET['id']);
    $sql->execute();
    
    echo "<script language='javascript'>";
    echo 'alert("Usuario Removido! com Sucesso!");';
    echo 'window.location.href="../listar-todos.php";';
    echo "</script>";
 
}
?>

