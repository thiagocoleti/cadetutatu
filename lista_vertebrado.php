<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadê Tu, Tatu?</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center" href="index.html">
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
            <a class="collapse-item" href="referencia_invertebrado.php">Adicionar referência</a>
            <a class="collapse-item" href="galeria_invertebrado.php">Galeria</a>            
            <hr class="sidebar-divider">
            <a class="collapse-item" href="#">Ocorrências</a>                        
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
            <a class="collapse-item" href="referencia_vertebrado.php">Adicionar referência</a>
            <a class="collapse-item" href="galeria_vertebrado.php">Galeria</a>            
            <hr class="sidebar-divider">
            <a class="collapse-item" href="#">Ocorrências</a>                        
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePlant" aria-expanded="true" aria-controls="collapsePlant">
          <i class="fas fa-seedling"></i>
          <span>Plantas</span>
        </a>
        <div id="collapsePlant" class="collapse" aria-labelledby="headingPlant" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="lista_invertebrado.php">Listar</a>
            <a class="collapse-item" href="cadastro_invertebrado.php">Cadastrar</a>            
            <a class="collapse-item" href="referencia_invertebrado.php">Adicionar referência</a>
            <a class="collapse-item" href="galeria_invertebrado.php">Galeria</a>            
            <hr class="sidebar-divider">
            <a class="collapse-item" href="#">Ocorrências</a>                        
          </div>
        </div>
      </li>

      <!-- Divider 
      <hr class="sidebar-divider">
-->

      <!-- Nav Item - Pages Collapse Menu 
      <li class="nav-item">
        <a class="nav-link" href="colaboradores.html">
          <i class="fas fa-users"></i>
          <span>Colaboradores</span></a>
      </li>-->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuário: Valerie Luna</span>              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card card-body" style="padding: 20px 70px;">
            <h4>Lista de Vertebrados Cadastrados</h4>
            <br>
          <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Nome Vulgar</th>
			      <th scope="col">Nome Científico</th>
			      <th scope="col">Ações</th>			      
			    </tr>
			  </thead>
			  <tbody>
			    <tr>			      
			      <td>Mark</td>
			      <td>Otto</td>
			      <td>
              <i class="far fa-edit" title="Alterar"></i>
              <i class="fas fa-search-plus" title="Ver detalhes"></i>
              <i class="far fa-trash-alt" title="Excluir"></i>
            </td>
			    </tr>
			    <tr>			      
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>
              <i class="far fa-edit" title="Alterar"></i>
              <i class="fas fa-search-plus" title="Ver detalhes"></i>
              <i class="far fa-trash-alt" title="Excluir"></i>
            </td>
			    </tr>
			    <tr>			      
			      <td>Larry</td>
			      <td>the Bird</td>
			      <td>
              <i class="far fa-edit" title="Alterar"></i>
              <i class="fas fa-search-plus" title="Ver detalhes"></i>
              <i class="far fa-trash-alt" title="Excluir"></i>
            </td>
			    </tr>
			  </tbody>
			</table>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Projeto UENP</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione sair para deslogar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <!--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!--<script src="vendor/chart.js/Chart.min.js"></script>-->

  <!-- Page level custom scripts -->
  <!--<script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>-->

</body>

</html>
