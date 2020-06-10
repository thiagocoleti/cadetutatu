<?php
    $_nomevulgar = $_POST["nomeVulgar"];
    $_nomecientifico = $_POST["nomeCientifico"];
    $_ordem = $_POST["ordem"];
    $_familia = $_POST["familia"];
    $_autor = $_POST["autor"];
    $_habitat = $_POST["habitat"];
    $_alimentacao = $_POST["alimentacao"];
    $_habitos = $_POST["habitos"];
    $_distgeografica = $_POST["distribuicaoGeografica"];
    $_informacoes = $_POST["outrasInformacoes"];

    $_acao = $_POST["acao"];

    if ($_acao == "INCLUIR"){
        inserir($_nomevulgar, $_nomecientifico, $_ordem, $_familia, $_autor, $_habitat, $_alimentacao, $_habitos, $_distgeografica, $_informacoes);
    }
    else if ($_acao == "ALTERAR"){
        $_idinvertebrado = $_POST["idInvertebrado"];
        alterar($_idinvertebrado, $_nomevulgar, $_nomecientifico, $_ordem, $_familia, $_autor, $_habitat, $_alimentacao, $_habitos, $_distgeografica, $_informacoes);
    }

    function inserir($nomevulgar, $nomecientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distgeografica, $informacoes){
        require("connection_db_mysql.php");
        
        //var_dump($nomevulgar, $nomecientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distgeografica, $informacoes);
        //echo "<br>";

        $stmt = $conn->prepare("INSERT 
            INTO invertebrados (nome_vulgar, nome_cientifico, ordem, familia, autor, habitat, alimentacao, habitos, distribuicao_geografica, outras_informacoes)     
            VALUES(:nv, :nc, :ord, :fam, :aut, :hbta, :ali, :hbto, :dg, :oi)"
        );

        $stmt->bindParam(":nv", $nomevulgar);
        $stmt->bindParam(":nc", $nomecientifico);
        $stmt->bindParam(":ord", $ordem);
        $stmt->bindParam(":fam", $familia);
        $stmt->bindParam(":aut", $autor);
        $stmt->bindParam(":hbta", $habitat);
        $stmt->bindParam(":ali", $alimentacao);
        $stmt->bindParam(":hbto", $habitos);
        $stmt->bindParam(":dg", $distgeografica);
        $stmt->bindParam(":oi", $informacoes);

        //var_dump($stmt);
        //echo "<br>";

        $stmt->execute();        
    }

    function alterar ($idinvertebrado, $nomevulgar, $nomecientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distgeografica, $informacoes){
        require("connection_db_mysql.php");

        var_dump($idinvertebrado, $nomevulgar, $nomecientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distgeografica, $informacoes);
        echo "<br>";

        $stmt = $conn->prepare("UPDATE invertebrados
                SET nome_vulgar = :nv,
                nome_cientifico = :nc,
                ordem = :ord,
                familia = :fam,
                autor = :aut,
                habitat = :hbta,
                alimentacao = :ali,
                habitos = :hbto,
                distribuicao_geografica = :dg,
                outras_informacoes = :oi
            WHERE id_invertebrado = :id"
        );

        $stmt->bindParam(":nv", $nomevulgar);
        $stmt->bindParam(":nc", $nomecientifico);
        $stmt->bindParam(":ord", $ordem);
        $stmt->bindParam(":fam", $familia);
        $stmt->bindParam(":aut", $autor);
        $stmt->bindParam(":hbta", $habitat);
        $stmt->bindParam(":ali", $alimentacao);
        $stmt->bindParam(":hbto", $habitos);
        $stmt->bindParam(":dg", $distgeografica);
        $stmt->bindParam(":oi", $informacoes);

        $stmt->bindParam(":id", $idinvertebrado);

        
        var_dump($stmt);
        echo "<br>";

        $stmt->execute();

    }
?>