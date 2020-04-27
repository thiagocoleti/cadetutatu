<?php

    $_idinvertebrado = $_POST["idinvertebrado"];
    $_nomevulgar = $_POST["nomevulgar"];
    $_nomecientifico = $_POST["nomecientifico"];
    $_ordem = $_POST["ordem"];
    $_familia = $_POST["familia"];
    $_autor = $_POST["autor"];
    $_habitat = $_post["habitat"];
    $_alimentacao = $_POST["alimentacao"];
    $_habitos = $_POST["habitos"];
    $_distgeografica = $_POST["distgeografica"];
    $_informacoes = $_POST["informacoes"];

    $_referencia = $_POST["referencias"];
    $_images = $_FILES["images"];

    $_acao = $_POST["acao"];
//  echo $_acao;

    if ($_acao == "INCLUIR"){
        //chama função INSERIR passando os parâmetros
    }
    else if ($_acao == "ALTERAR"){
        //chama função ALTERAR passando os parâmetros
    }
    else if($_acao == "EXCLUIR"){
        //chama função EXCLUIR passando os parâmetros
    }
    else if($_acao == "REFERENCIAS"){
        //chama função para adicionar referências passando os parâmetros
    }
    else if($_acao == "IMAGENS"){
        //chama função para adicionar imagens passando os parâmetros
    }
    else if ($_acao == "BUSCAR"){
        //chama função para buscar informações do invertebrado passando os parâmetros
    }



function inserir($nomevulgar, $nomecientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distgeografica, $informacoes){

       include 'conexaoMySQL.php';
 
    //-- CAMINHO DA IMAGEM DA PLACA--
 
    
    
    $sql = "insert into ....";
            
   
    if (mysqli_query($conn, $sql)) {
        
            echo 'Aviso de confirmação de ação para o usuário';

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}

function alterar ($idinvertebrado, $nomevulgar, $nomecientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distgeografica, $informacoes){
       include 'conexaoMySQL.php';
 
    //-- CAMINHO DA IMAGEM DA PLACA--
 
    
    
    $sql = "update ....";
            
   
    if (mysqli_query($conn, $sql)) {
        
            echo 'Aviso de confirmação de ação para o usuário';

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


function excluir ($idinvertebrado){

}

function inserirreferencia ($idinvertebrado, $referencias){

}

function inseririmagens($idinvertebrado, $imagens){

}

function buscarInvertebrado($idinvertebrado){
        include 'conexaoMySQL.php';
                  $sql = ".. ";

                          try {
                              $result = $conn->query($sql);
                          } catch (mysqli_sql_exception $ex) {
                              $ex->getMessage();
                            echo $ex;
                          }

                           if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {  
                                    //executa carga de objeto para retorno!!
                            }

}

?>