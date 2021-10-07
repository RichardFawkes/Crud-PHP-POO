<?php
require_once('def/list_cliente.php');


?>
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
  <link rel="stylesheet" href="css/admin.css" />
  <link rel="stylesheet" href="css/styles.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
</head>

<body>
  <!--Main Navigation-->
  <header>
<?php include_once('inc/sidebar.php');?>
<?php include_once('inc/navbar.php');?>
  </header>
  <!--Main Navigation-->

  <main>
  <div class="container main">
      <h3>Editar Cliente</h3>
      <div class="card">
      <form action="def/update.php" method="post" >
          <input type="hidden" name="idUser" id="idUser" value="<?=$value['id'];?>">
          <div class="row">
          <div class="col-md-4">
          <label for="nome">Nome Completo:</label>
          <input type="text" class="form-control" name="nome" id="nome" value="<?=$value['nome'];?>">
          </div>
          <div class="col-md-4">
          <label for="cpf_cnpj ">CPF/CNPJ:</label>
          <input type="text" class="form-control cpfOuCnpj" name="cpf_cnpj" id="cpfOuCnpj" value="<?=$value['cpfcnpj'];?>">
          </div>
          <div class="col-md-4">
          <label for="dataNasc">Data Nascimento :</label>
          <input type="date" class="form-control " name="data_nascimento" id="data_nascimento" value="<?=$value['data_nascimento'];?>">
          </div>
          </div>

          <div class="row">
          <div class="col-md-4">
          <label for="endereco">Endereço:</label>
          <input type="text" class="form-control" name="endereco" id="endereco" value="<?=$value['endereco'];?>">
          </div>
       
          <div class="col-md-4">
          <label for="valor">Valor </label>
          <input type="int" class="form-control " name="valor" id="valor" value="<?=$value['valor'];?>">
          </div>
          <div class="col-md-4">
          <label for="dataNasc">Data Vencimento :</label>
          <input type="date" class="form-control " name="data_venc" id="data_venc" value="<?=$value['data_venc'];?>">
          </div>
          </div>
          <div class="col-md-4">
          <label for="descri_titulo">Descrição do título:</label>
          <textarea style="resize: none;" type="text" class="form-control" name="descri_titulo" id="descri_titulo"><?=$value['descri_titulo'];?></textarea>
          </div>
          <div class="col-md-4">
          <label for="valor">Ultima Atualização :</label>
          <input type="int" class="form-control " name="update_at" id="update_at" disabled value="<?=$value['update_at'];?>">
          </div>
          <button type="submit" class="btn btn-success" >Atualizar</button>

          </div>
      </form>
  </div>
  </div>
  </main>
  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/admin.js"></script>
    <!-- Mask -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
  <script>
    var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['000.000.000-000', '00.000.000/0000-00'];
        $('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
}

$('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
  </script>

</body>

</html>