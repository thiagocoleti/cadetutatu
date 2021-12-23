<?php
	session_start();	

	//$_idusuario = $_POST["idusuario"];
	//$_nomeusuario = $_POST["nomeusuario"];
	$_emailusuario = $_POST["emailusuario"];
	$_senhausuario = $_POST["senhausuario"];
	//$_tipousuario = $_POST["tipousuario"];
	//$_deptousuario = $_POST["deptousuario"];

	$_acao = $_POST["acao"];
	//	echo $_acao;

	if ($_acao == "INCLUIR"){

	}
	else if ($_acao == "ALTERAR"){

	}
	else if($_acao == "EXCLUIR"){

	}
	else if ($_acao == "LOGIN"){
		 $qtdeUsu = verificarLogin($_emailusuario, $_senhausuario);

		 if ($qtdeUsu == 1){
		 	        
	        $_SESSION["usuario"] = $_emailusuario;	
	        $usuariologado = carregaSessao($_emailusuario);
	        $_SESSION["nomeusuario"] = $usuariologado[0];
	        $_SESSION["tipo"] = $usuariologado[1];

	        //echo $_SESSION["usuario"]. "<br>";
	        //echo $_SESSION["nomeusuario"]. "<br>";
	        header("Location:/cadetutatu/home.php");
		 }
		 else{
		 	echo "Usuário Inválido!!!";
		 }
	
	}


	function carregaSessao($usu){
		include 'connection_db_mysql.php';
		$sql2 = "select nome_usuario, tipo_usuario from usuarios where email_usuario = '$usu'";
		 	try {
    		$resultbusca = $conn->query($sql2);
        	if ($resultbusca->rowCount() > 0) {
                $nome_usu = $resultbusca->fetch(PDO::FETCH_ASSOC);
                $usuariologado = array($nome_usu["nome_usuario"],  $nome_usu["tipo_usuario"] );
              
               return $usuariologado;
        	}
        	else {
           		return 0;
        	}
        } catch (mysqli_sql_exception $ex) {
            $ex->getMessage();
            echo $ex;
            return 0;                                  
        }

	}


	function verificarLogin($usu, $senha){
	 	include 'connection_db_mysql.php';
		$sql_usuario = "select count(*) as qtde from usuarios where email_usuario = '$usu'
		 	and senha_usuario = password('$senha')";
		//echo $sql;
		try {
    		$resultbusca = $conn->query($sql_usuario);
        	if ($resultbusca->rowCount() > 0) {
                $numusus = $resultbusca->fetch(PDO::FETCH_ASSOC);
                return $numusus["qtde"];
        	}
        	else {
           		return 0;
        	}
        } catch (mysqli_sql_exception $ex) {
            $ex->getMessage();
            echo $ex;
            return 0;                                  
        }
	}


?>