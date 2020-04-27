<?php

	$_idusuario = $_POST["idusuario"];
	$_nomeusuario = $_POST["nomeusuario"];
	$_emailusuario = $_POST["emailusuario"];
	$_senhausuario = $_POST["senhausuario"];
	$_tipousuario = $_POST["tipousuario"];
	$_deptousuario = $_POST["deptousuario"];

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
		 	session_start();	        
	        $_SESSION["usuario"] = $_emailusuario;	    
	        header("Location: home.php");
		 }
		 else{
		 	echo "Usuário Inválido!!!";
		 }
	
	}


function verificarLogin($usu, $senha){
	 include './conexaoMySQL.php';
	$sql = "select count(*) as qtde from usuarios where email_usuario = '$usu'
		 and senha_usuario = password('$senha')";
		 //echo $sql;
			 try {
    			$resultbusca = $conn->query($sql);
        		if ($resultbusca->num_rows > 0) {
                    $numusus = $resultbusca->fetch_assoc();
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