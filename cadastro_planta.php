
<?php
 session_start();

 if ( $_SESSION["usuario"] == "") {
   header("Location:/cadetutatu/php/limpasession.php");
 }


 ?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 
</head>

  <title>Cadê Tu, Tatu?</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

 

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      require("sidebar.php"); 
    ?>

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
                <?php
                  $perfil = "";
                  if ($_SESSION["tipo"] == "A"){
                    $perfil = "Administrador";
                  }
                  else if ($_SESSION["tipo"] == "P"){
                    $perfil = "PESQUISADOR";

                  }

                  print( $_SESSION["nomeusuario"]." - (".$perfil.")");
                ?>

                            </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <?php
                  include "menu_usuario.php";
                ?>
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
          
          <div class="card card-body">
          
            <h4>Cadastro de Planta</h4>
            <hr>

            <form method="post" action="php/planta.php" id="form-cadPlanta">
              <input type="hidden" id="acao" name="acao" value="INCLUIR">
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="cad-nomeVulgar">Nome vulgar</label>
                  <input type="text" class="form-control" id="cad-nomeVulgar" name="nomeVulgar" required> 
                </div>
                <div class="form-group col-md-4">
                  <label for="cad-nomeCientifico">Nome científico</label>
                  <input type="text" class="form-control" id="cad-nomeCientifico" name="nomeCientifico" required> 
                </div>              
                <div class="form-group col-md-4">
                  <label for="cad-familia">Familia</label>
                  <input type="text" class="form-control" id="cad-familia" name="familia" required> 
                </div>
               <!-- <div class="form-group col-md-6">
                  <label for="cad-autor">Autor</label>
                  <input type="text" class="form-control" id="cad-autor" name="autor"> 
                </div> -->
              </div> 
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="cad-periodoFloracao">Periodo de Floração</label>
                  <input type="text" class="form-control" id="cad-periodoFloracao" name="periodoFloracao" required> 
                </div>  
                <div class="form-group col-md-6"> 
                  <label for="cad-periodoFrutificacao">Periodo de Frutificação</label>
                  <input type="text" class="form-control" id="cad-periodoFrutificacao" name="periodoFrutificacao" required> 
                </div>
              </div>
              
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="cad-distribuicaoGeografica">Distribuição geográfica</label>
                  <input type="text" class="form-control" id="cad-distribuicaoGeografica" name="distribuicaoGeografica" required> 
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="cad-outrasinformacoes">Outras informações</label>
                  <input type="text" class="form-control" id="cad-outrasinformacoes" name="outrasInformacoes"> 
                </div>
              </div>

              <hr>
           <!--   <div class="row">
                <div class='container text-center'>
                  <h5> Localização geográfica da planta na UENP </h5>
                </div>
                <div class="form-group col-md-6">
                  <label for="cad-latitude">Latitude (limite de 6 casas decimais)</label>
                  <input type="number" step="any" class="form-control" id="cad-latitude" name="latitude" required> 
                </div> 
                <div class="form-group col-md-6"> 
                  <label for="cad-longitude">Longitude (limite de 6 casas decimais)</label>
                  <input type="number" step="any" class="form-control" id="cad-longitude" name="longitude" required> 
                </div>
                <div class="form-group col-md-12"> 
                  <label for="cad-desclocalizacao">Descrição da Localização</label>
                  <input type="text" class="form-control" id="cad-desclocalizacao" name="desclocalizacao"> 
                </div>                      
             
              </div> <br>
              <div id="map" style="height: 400px"></div>

                <script>
    
                    var map = L.map('map').setView([-23.1064, -50.3604], 13);


                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidGhpYWdvY29sZXRpIiwiYSI6ImNrejczMzgwOTE2N2kyc3R2YWhxd3plNnAifQ.717Vgp0dYc_oAv0EzGcvgg', {
                    attribution: 'CadeTuTatu &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    maxZoom: 18,
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1,
                    accessToken: 'your.mapbox.access.token'
                }).addTo(map);



                  function onMapClick(e) {
                      alert("You clicked the map at " + e.latlng);
                    var marker = L.marker()
                      .setLatLng(e.latlng)                      
                      .addTo(map);

                    document.getElementById('cad-latitude').value = e.latlng.lat;
                    document.getElementById('cad-longitude').value = e.latlng.lng;
                  }

                  map.on('click', onMapClick);
               </script>

      </div> -->
             
             
              <hr>
              
              <div style="float: right">
                <button id="btn-cadInvertebrado" class="btn botao  btn-user btn-block btn-primary" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Aguarde..." type="submit" style="box-shadow: none !important;">Cadastrar</button>


                <a href="lista_planta.php" id="btn-cancelcadInvertebrado" class="btn botao btn-danger btn-user btn-block" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Aguarde..." style="box-shadow: none !important;"> Cancelar
                </a>
              </div>
            </form>
          </div>

        </div>
        <!-- /.container-fluid -->

          
      <!-- End of Main Content -->

     

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>CadeTuTatu</span>
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
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
          <a href="index.php" class="btn btn-primary">Sim</a>
        </div>
      </div>
    </div>
  </div>


   <!-- Mapa Modal-->
  <div class="modal fade bd-example-modal-lg" id="MapaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Localização da Planta</h5>
        </div>        
          <div class="modal-body">
               <script type="text/javascript">
                 function myMap() {
                  var mapProp= {
                    center:new google.maps.LatLng(51.508742,-0.120850),
                    zoom:5,
                  };
                  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                  }
                
                </script>
                 <script type="text/javascript"
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2F0pv-T2Tm4xlNXa043XVhzv2YH7MvKY&callback=myMap"
                  ></script>
              
              <div id="googleMap" style="width:100%; height:400px"></div> 
          </div>        
             
        
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
          <a href="index.php" class="btn btn-primary">Sim</a>
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


<script>
    function posicaoMapa() {
      var lat = document.getElementById("cad-latitude").value;
      var long = document.getElementById("cad-longitude").value;



      if ((lat == "") || (long == "")){
        alert("Coordenadas inválidas! Carregando posição do Campus Luiz Meneghel!");



        var nc = document.getElementById("link_mapa").href="https://maps.google.com/?q=-23.10924578122536,-50.35934526155142";

      } else {
          var latlong = lat.concat(",").concat(long);
          var posMaps = "https://maps.google.com/?q=";
          var posMaps = posMaps.concat(latlong);
           var nc = document.getElementById("link_mapa").href=posMaps;
        
      }
    





    }

</script>

</body>

</html>
