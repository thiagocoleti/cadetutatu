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

    }
    else if ($_acao == "ALTERAR"){

    }
    else if($_acao == "EXCLUIR"){

    }
    else if($_acao == "REFERENCIAS"){

    }
    else if($_acao == "IMAGENS"){

    }



function inserir($nomevulgar, $nomecientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distgeografica, $informacoes){

}

function alterar ($idinvertebrado, $nomevulgar, $nomecientifico, $ordem, $familia, $autor, $habitat, $alimentacao, $habitos, $distgeografica, $informacoes){

}


function excluir ($idinvertebrado){

}

function inserirreferencia ($idinvertebrado, $referencias){

}

function inseririmagens($idinvertebrado, $imagens){

}

?>