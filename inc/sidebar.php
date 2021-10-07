  <!-- Sidebar -->
<?php $url = $_SERVER['REQUEST_URI']; ?>

  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
        <a href="listar-todos.php" class="list-group-item list-group-item-action py-2 ripple  <?php 
    if ($url == "/Teste-PHP-CRUD/listar-todos.php") {
      echo "active";
    }
          ?>">
            <i class="fas fa-users fa-fw me-3"></i><span>Listar Devedores</span></a>



          <a href="cadastro.php" class="list-group-item list-group-item-action py-2 ripple <?php 
    if ($url == "/Teste-PHP-CRUD/cadastro.php") {
      echo "active";
    }
          ?>">
            <i class="fas fa-user-plus fa-fw me-3"></i><span>Cadastrar Devedor</span>
          </a>

        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  