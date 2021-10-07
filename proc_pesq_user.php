<?php
//Incluir a conexão com banco de dados
include_once 'def/connection.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$sql = $conn->prepare("SELECT * FROM clientes WHERE nome LIKE '%$usuarios%' LIMIT 20");
$sql -> execute();

$fetchClientes = $sql->fetchAll();

foreach($fetchClientes as $key => $value){
	echo '<tr>
      <th scope="row">'.$value['id'].'</th>
      <td >'.$value['nome'].'</td>
	  <td >'.$value['valor'].'</td>
	  <td >'.$value['data_venc'].'</td>
	  <td><a href="editar.php?id='.$value['id'].'"class="btn btn-primary"><i class="fas fa-user-edit"></i>Editar</a></td>
	  <td><a href="def/delete.php?id='.$value['id'].'"class="btn btn-danger"><i class="fas fa-trash"></i> Remover</a></td>


      </tr>';
	
}
?>