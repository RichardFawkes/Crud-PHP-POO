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
<?php include_once('inc/navbar.php')?>
  </header>
  <!--Main Navigation-->

  <main>
  <div class="container main card" style="margin-top:60px">
		<form method="POST" id="form-pesquisa" action="">
			<label>Buscar Devedores: </label>
			<input class="form-control" type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome do usuário">
		</form>
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome </th>
      <th scope="col">Valor.</th>
      <th scope="col">Vencimento</th>
      <th scope="col">Editar/Remover</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody class="resultado">
    
  </tbody>
</table>
	
		

  </div>
  </main>
  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/admin.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script type="text/javascript" src="personalizado.js"></script>

</body>

</html>