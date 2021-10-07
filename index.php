<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Crud Devedores PHP </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/admin.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
</head>

<body>
  <!--Main Navigation-->
  <header>
  
<?php include_once('inc/sidebar.php');?>
<?php include_once('inc/navbar.php')?>
  </header>
  <!--Main Navigation-->

  <main>
  <!-- <div class="container main">
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
  </div> -->
  </main>
  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/admin.js"></script>

</body>

</html>