<?php
    require("connection_db_mysql.php");

    $id_ver = $_GET["id_ver"];

    $stmt = $conn->prepare("SELECT * FROM vertebrados WHERE id_vertebrado = :id");
    $stmt->bindParam(":id", $id_ver);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<div class="row">';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-nomeVulgar">Nome vulgar</label>'; 
            echo '<input type="text" class="form-control" id="cad-nomeVulgar" name="nomeVulgar" value="'.$result[0]["nome_vulgar"].'" disabled>';
        echo '</div>';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-nomeCientifico">Nome científico</label>'; 
            echo '<input type="text" class="form-control" id="cad-nomeCientifico" name="nomeCientifico" value="'.$result[0]["nome_cientifico"].'" disabled>';
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-ordem">Ordem</label>';
            echo '<input type="text" class="form-control" id="cad-ordem" name="ordem" value="'.$result[0]["ordem"].'" disabled>';
        echo '</div>';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-familia">Familia</label>';
            echo '<input type="text" class="form-control" id="cad-familia" name="familia" value="'.$result[0]["familia"].'" disabled>';
        echo '</div>';
        /*echo '<div class="form-group col-md-4">';
            echo '<label for="cad-autor">Autor</label>';
            echo '<input type="text" class="form-control" id="cad-autor" name="autor" value="'.$result[0]["autor"].'" disabled>'; 
        echo '</div>'; */
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-4">';
            echo '<label for="cad-habitat">Habitat</label>';
            echo '<input type="text" class="form-control" id="cad-habitat" name="habitat" value="'.$result[0]["habitat"].'" disabled>';
        echo '</div>'; 
        echo '<div class="form-group col-md-4">';
            echo '<label for="cad-alimentacao">Alimentação</label>';
            echo '<input type="text" class="form-control" id="cad-alimentacao" name="alimentacao" value="'.$result[0]["alimentacao"].'" disabled>';
        echo '</div>';
        echo '<div class="form-group col-md-4">';
            echo '<label for="cad-habitos">Hábitos</label>';
            echo '<input type="text" class="form-control" id="cad-habitos" name="habitos" value="'.$result[0]["habitos"].'" disabled>'; 
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-12">';
            echo '<label for="cad-distribuicaoGeografica">Distribuição geográfica</label>';
            echo '<input type="text" class="form-control" id="cad-distribuicaoGeografica" name="distribuicaoGeografica" value="'.$result[0]["distribuicao_geografica"].'" disabled>';
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-12">';
            echo '<label for="cad-outrasinformacoes">Outras informações</label>';
            echo '<input type="text" class="form-control" id="cad-outrasinformacoes" name="outrasInformacoes" value="'.$result[0]["outras_informacoes"].'" disabled>';
        echo '</div>';
    echo '</div>';

?>