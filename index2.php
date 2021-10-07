<!--Crud PHP by Richard :)-->

<?php

require_once('def/connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
 

  </head>
  <body>
    <h1>Crud PHP by Richard</h1>

  <div class="container">
      <h3>Cadastro do devedor</h3>
      <div class="card">
      <form action="" method="post" >
          <div class="row">
          <div class="col-md-4">
          <label for="nome">Nome Completo:</label>
          <input type="text" class="form-control" name="nome" id="nome">
          </div>
          <div class="col-md-4">
          <label for="cpf_cnpj">CPF/CNPJ:</label>
          <input type="number" class="form-control" name="cpf_cnpj" id="cpf_cnpj">
          </div>
          <div class="col-md-4">
          <label for="dataNasc">Data Nascimento :</label>
          <input type="date" class="form-control " name="data_nascimento" id="data_nascimento">
          </div>
          </div>

          <div class="row">
          <div class="col-md-4">
          <label for="endereco">Endereço:</label>
          <input type="text" class="form-control" name="endereco" id="endereco">
          </div>
          <div class="col-md-4">
          <label for="descri_titulo">Descrição do título:</label>
          <input type="number" class="form-control" name="descri_titulo" id="descri_titulo">
          </div>
          <div class="col-md-4">
          <label for="valor">Valor :</label>
          <input type="int" class="form-control " name="valor" id="valor">
          </div>
          <div class="col-md-4">
          <label for="valor">Ultima Atualização :</label>
          <input type="int" class="form-control " name="update_at" id="update_at" disabled>
          </div>
          </div>
<button class="btn btn-success">Cadastrar</button>
      </form>
  </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>