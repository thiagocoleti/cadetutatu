<?php
    $_nomeVulgar = $_POST["nomeVulgar"];
    $_nomeCientifico = $_POST["nomeCientifico"];
    $_familia = $_POST["familia"];
    $_autor = $_POST["autor"];
    $_periodoFloracao = $_POST["periodoFloracao"];
    $_periodoFrutificacao = $_POST["periodoFrutificacao"];
    $_distribuicaoGeografica = $_POST["distribuicaoGeografica"];
    $_informacoes = $_POST["outrasInformacoes"];

    $_acao = $_POST["acao"]; 

    if ($_acao == "INCLUIR") {
        inserir($_nomeVulgar, $_nomeCientifico, $_familia, $_autor, $_periodoFloracao, $_periodoFrutificacao, $_distribuicaoGeografica, $_informacoes);
    }
    else if ($_acao == "ALTERAR") {
        $_idPlanta = $_POST["idPlanta"]; 
        alterar($_idPlanta, $_nomeVulgar, $_nomeCientifico, $_familia, $_autor, $_periodoFloracao, $_periodoFrutificacao, $_distribuicaoGeografica, $_informacoes);
    }

    function inserir($nomeVulgar, $nomeCientifico, $familia, $autor, $periodoFloracao, $periodoFrutificacao, $distribuicaoGeografica, $informacoes) {
        require("connection_db_mysql.php");

        $stmt = $conn->prepare("
            INSERT INTO plantas (
                nome_vulgar,
                nome_cientifico,
                familia, autor,
                periodo_floracao
                periodo_frutificacao,
                distribuicao_geografica,
                outras_informacoes
            )
            VALUES(:nv, :nc, :fam, :aut, :pflo, :pfru, :dg, :oi)
        ");

        $stmt->bindParam(":nv", $nomeVulgar);
        $stmt->bindParam(":nc", $nomeCientifico);
        $stmt->bindParam(":fam", $familia);
        $stmt->bindParam(":aut", $autor);
        $stmt->bindParam(":pflo", $periodoFloracao);
        $stmt->bindParam(":pfru", $periodoFrutificacao);
        $stmt->bindParam(":dg", $distribuicaoGeografica);
        $stmt->bindParam(":oi", $informacoes);

        $stmt->execute(); 

        header("Location: ../lista_plantas.php"); 
    }

    function alterar($idPlanta,$nomeVulgar, $nomeCientifico, $familia, $autor, $periodoFloracao, $periodoFrutificacao, $distribuicaoGeografica, $informacoes) {
        require("connection_db_mysql.php");

        $stmt = $conn->prepare("
            UPDATE plantas 
            SET 
                nome_vulgar = :nv,
                nome_cientifico = :nc,
                familia = :fam,
                autor = :aut, 
                periodo_floracao = :pflo,
                periodo_frutificacao = :pfru,
                distribuicao_geografica = :dg,
                outras_informacoes = :oi
            WHERE id_planta = :id
        "); 

        $stmt->bindParam(":nv", $nomeVulgar);
        $stmt->bindParam(":nc", $nomeCientifico);
        $stmt->bindParam(":fam", $familia);
        $stmt->bindParam(":aut", $autor);
        $stmt->bindParam(":pflo", $periodoFloracao);
        $stmt->bindParam(":pfru", $periodoFrutificacao);
        $stmt->bindParam(":dg", $distribuicaoGeografica);
        $stmt->bindParam(":oi", $informacoes);
        
        $stmt->bindParam(":id", $idPlanta);

        $stmt->execute();

        header("Location: ../lista_planta.php");
    }
?> 