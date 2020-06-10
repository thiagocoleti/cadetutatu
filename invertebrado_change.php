<?php
    require("connection_db_mysql.php");

    $id_inv = $_GET["id_inv"];

    $stmt = $conn->prepare("SELECT * FROM invertebrados WHERE id_invertebrado = :id");
    $stmt->bindParam(":id", $id_inv);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<input type="hidden" id="cad-idInvertebrado" name="idInvertebrado" value="'.$id_inv.'">';

    echo '<div class="row">';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-nomeVulgar">Nome vulgar</label>'; 
            echo '<input type="text" class="form-control" id="cad-nomeVulgar" name="nomeVulgar" value="'.$result[0]["nome_vulgar"].'"> ';
        echo '</div>';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-nomeCientifico">Nome científico</label>'; 
            echo '<input type="text" class="form-control" id="cad-nomeCientifico" name="nomeCientifico" value="'.$result[0]["nome_cientifico"].'"> ';
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-4">';
            echo '<label for="cad-ordem">Ordem</label>';
            echo '<input type="text" class="form-control" id="cad-ordem" name="ordem" value="'.$result[0]["ordem"].'">';
        echo '</div>';
        echo '<div class="form-group col-md-4">';
            echo '<label for="cad-familia">Familia</label>';
            echo '<input type="text" class="form-control" id="cad-familia" name="familia" value="'.$result[0]["familia"].'">';
        echo '</div>';
        echo '<div class="form-group col-md-4">';
            echo '<label for="cad-autor">Autor</label>';
            echo '<input type="text" class="form-control" id="cad-autor" name="autor" value="'.$result[0]["autor"].'">'; 
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-4">';
            echo '<label for="cad-habitat">Habitat</label>';
            echo '<input type="text" class="form-control" id="cad-habitat" name="habitat" value="'.$result[0]["habitat"].'">';
        echo '</div>'; 
        echo '<div class="form-group col-md-4">';
            echo '<label for="cad-alimentacao">Alimentação</label>';
            echo '<input type="text" class="form-control" id="cad-alimentacao" name="alimentacao" value="'.$result[0]["alimentacao"].'">';
        echo '</div>';
        echo '<div class="form-group col-md-4">';
            echo '<label for="cad-habitos">Hábitos</label>';
            echo '<input type="text" class="form-control" id="cad-habitos" name="habitos" value="'.$result[0]["habitos"].'">'; 
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-12">';
            echo '<label for="cad-distribuicaoGeografica">Distribuição geográfica</label>';
            echo '<input type="text" class="form-control" id="cad-distribuicaoGeografica" name="distribuicaoGeografica" value="'.$result[0]["distribuicao_geografica"].'">';
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-12">';
            echo '<label for="cad-outrasinformacoes">Outras informações</label>';
            echo '<input type="text" class="form-control" id="cad-outrasinformacoes" name="outrasInformacoes" value="'.$result[0]["outras_informacoes"].'">';
        echo '</div>';
    echo '</div>';

?>