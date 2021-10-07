<?php
include('connection.php');


//DELETE.
if(isset($_GET['id'])){
    $sql = $conn->prepare("DELETE FROM clientes WHERE id=:id ");
    $sql->bindParam(':id', $_GET['id']);
    $sql->execute();
    
    echo 'Deletado com Sucesso<br>ID_',$_GET['id'];
}
 

?>

