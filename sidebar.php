

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center" href="home.php">
        <div class="sidebar-brand-icon" style="margin-top: 20px;">
          <img src="./img/logo.png" width=80 height=70>
        </div>
      </a>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-spider"></i>
          <span>Invertebrados</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="lista_invertebrado.php">Listar</a>
            <a class="collapse-item" href="cadastro_invertebrado.php">Cadastrar</a>            
            <!-- <a class="collapse-item" href="referencia_invertebrado.php">Adicionar referência</a> -->
            <a class="collapse-item" href="lista_invertebrado_galeria.php">Galeria</a>            
            <hr class="sidebar-divider">
           <a class="collapse-item" href="#">Lista de ocorrências</a>
           <a class="collapse-item" href="#">Inserir ocorrência</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-horse"></i>
          <span>Vertebrados</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="lista_vertebrado.php">Listar</a>
            <a class="collapse-item" href="cadastro_vertebrado.php">Cadastrar</a>            
            <!-- <a class="collapse-item" href="referencia_vertebrado.php">Adicionar referência</a> -->
            <a class="collapse-item" href="lista_vertebrado_galeria.php">Galeria</a>            
            <hr class="sidebar-divider">
          <!--  <a class="collapse-item" href="#">Ocorrências</a>                         -->
          </div>
        </div>
      </li>
      
      <!-- Nav Item - Utilities Collapse Menu --> 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePlant" aria-expanded="true" aria-controls="collapsePlant">
          <i class="fas fa-seedling"></i>
          <span>Plantas</span>
        </a>
        <div id="collapsePlant" class="collapse" aria-labelledby="headingPlant" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="lista_planta.php">Listar</a>
            <a class="collapse-item" href="cadastro_planta.php">Cadastrar</a>            
            <!-- <a class="collapse-item" href="referencia_invertebrado.php">Adicionar referência</a> -->
            <a class="collapse-item" href="lista_planta_galeria.php">Galeria</a>          
            <hr class="sidebar-divider">
           <a class="collapse-item" href="#">Lista de ocorrências</a>
           <a class="collapse-item" href="ocorrencia_planta.php">Inserir ocorrência</a>  
          </div>
        </div>
      </li>

      <?php
     if ($_SESSION["tipo"] == "A"){
      ?>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-users"></i>
            <span>Usuários</span></a>
             <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="lista_usuarios.php">Listar</a>
                <a class="collapse-item" href="cadastro_usuario.php">Cadastrar</a>            
                <!-- <a class="collapse-item" href="referencia_invertebrado.php">Adicionar referência</a> -->
                          
            </div>
        </li>
      <?php
          }
      ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->