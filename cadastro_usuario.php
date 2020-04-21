<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="fundo">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div style="width: 430px;">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><img src="./img/logo.png" width=100 height=80></h1>
                                        <h3 style="margin-bottom: 20px">Cadastro</h3>
                                    </div>
                                    <form class="user" style="padding: 0px 20px">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cadastroInputNome" aria-describedby="emailHelp" placeholder="Insira seu nome completo">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="cadastroInputEmail" placeholder="Insira seu email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="cadastroInputSenha" placeholder="Insira um senha">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="cadastroInputTipo">
                                            <option>Administrador</option>
                                            <option>Pesquisador</option>
                                        </select>
                                    </div>
                                    <a href="login.html" class="btn botao btn-user btn-block form-group">
                                        Cadastrar
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>