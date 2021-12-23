<?php
    $_nomeVulgar = $_POST["nomeVulgar"];
    $_nomeCientifico = $_POST["nomeCientifico"];
    $_ordem = $_POST["ordem"];
    $_familia = $_POST["familia"];
    $_autor = $_POST["autor"];
    $_habitat = $_POST["habitat"];
    $_alimentacao = $_POST["alimentacao"];
    $_habitos = $_POST["habitos"];
    $_distGeografica = $_POST["distribuicaoGeografica"];
    $_informacoes = $_POST["outrasInformacoes"];

    $_acao = $_POST["acao"];

    if ($_acao == "INCLUIR"){
        inserir($_nomeVulgar, $_nomeCientifico, $_ordem, $_familia, $_autor, $_habitat, $_alimentacao, $_habitos, $_distGeografica, $_informacoes);
    }
    else if ($_acao == "ALTERAR"){
        $_idInvertebrado = $_POST["idInvertebrado"];
        alterar($_idInvertebrado, $_nomeVulgar, $_nomeCientifico, $_ordem, $_familia, $_autor, $_habitat, $_alimentacao, $_habitos, $_distGeografica, $_informacoes);
    }

    function inserir($nomeVulgar, $nomeCientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distGeografica, $informacoes){
        require("connection_db_mysql.php");

        $stmt = $conn->prepare("
            INSERT INTO invertebrados (
                nome_vulgar, 
                nome_cientifico, 
                ordem, 
                familia,                 
                habitat, 
                alimentacao, 
                habitos, 
                distribuicao_geografica, 
                outras_informacoes
            )     
            VALUES(:nv, :nc, :ord, :fam, :hbta, :ali, :hbto, :dg, :oi)
        ");

        $stmt->bindParam(":nv", $nomeVulgar);
        $stmt->bindParam(":nc", $nomeCientifico);
        $stmt->bindParam(":ord", $ordem);
        $stmt->bindParam(":fam", $familia);
     //   $stmt->bindParam(":aut", $autor);
        $stmt->bindParam(":hbta", $habitat);
        $stmt->bindParam(":ali", $alimentacao);
        $stmt->bindParam(":hbto", $habitos);
        $stmt->bindParam(":dg", $distGeografica);
        $stmt->bindParam(":oi", $informacoes);

        $stmt->execute();        

        header("Location: ../lista_invertebrado.php");
    }

    function alterar ($idInvertebrado, $nomeVulgar, $nomeCientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distGeografica, $informacoes){
        require("connection_db_mysql.php");

        $stmt = $conn->prepare("
            UPDATE invertebrados
            SET 
                nome_vulgar = :nv,
                nome_cientifico = :nc,
                ordem = :ord,
                familia = :fam,               
                habitat = :hbta,
                alimentacao = :ali,
                habitos = :hbto,
                distribuicao_geografica = :dg,
                outras_informacoes = :oi
            WHERE id_invertebrado = :id
        ");

        $stmt->bindParam(":nv", $nomeVulgar);
        $stmt->bindParam(":nc", $nomeCientifico);
        $stmt->bindParam(":ord", $ordem);
        $stmt->bindParam(":fam", $familia);
      //  $stmt->bindParam(":aut", $autor);
        $stmt->bindParam(":hbta", $habitat);
        $stmt->bindParam(":ali", $alimentacao);
        $stmt->bindParam(":hbto", $habitos);
        $stmt->bindParam(":dg", $distGeografica);
        $stmt->bindParam(":oi", $informacoes);

        $stmt->bindParam(":id", $idInvertebrado);

        $stmt->execute();


    /*if (mysqli_query($conn, $sql)) {
       echo "Registro inserido com sucesso";
       return;
      //  include "messageforuser.php";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }*/

        header("Location: ../lista_invertebrado.php");
    }
?>