<?php
    require("connection_db_mysql.php");

    $id_inv = $_GET["id_inv"];

    $stmt = $conn->prepare("SELECT * FROM invertebrados WHERE id_invertebrado = :id");
    $stmt->bindParam(":id", $id_inv);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<input type="hidden" id="idInvertebrado" name="idInvertebrado" value="'.$id_inv.'">';

    echo '<div class="row">';
        echo '<div class="form-group col-md-6">';
            echo '<label for="nomeVulgar">Nome vulgar</label>'; 
            echo '<input type="text" class="form-control" id="nomeVulgar" name="nomeVulgar" value="'.$result[0]["nome_vulgar"].'"> ';
        echo '</div>';
        echo '<div class="form-group col-md-6">';
            echo '<label for="nomeCientifico">Nome científico</label>'; 
            echo '<input type="text" class="form-control" id="nomeCientifico" name="nomeCientifico" value="'.$result[0]["nome_cientifico"].'"> ';
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-4">';
            echo '<label for="ordem">Ordem</label>';
            echo '<input type="text" class="form-control" id="ordem" name="ordem" value="'.$result[0]["ordem"].'">';
        echo '</div>';
        echo '<div class="form-group col-md-4">';
            echo '<label for="familia">Familia</label>';
            echo '<input type="text" class="form-control" id="familia" name="familia" value="'.$result[0]["familia"].'">';
        echo '</div>';
        //echo '<div class="form-group col-md-4">';
         //   echo '<label for="cad-autor">Autor</label>';
          //  echo '<input type="text" class="form-control" id="cad-autor" name="autor" value="'.$result[0]["autor"].'">'; 
        //echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-4">';
            echo '<label for="habitat">Habitat</label>';
            echo '<input type="text" class="form-control" id="habitat" name="habitat" value="'.$result[0]["habitat"].'">';
        echo '</div>'; 
        echo '<div class="form-group col-md-4">';
            echo '<label for="alimentacao">Alimentação</label>';
            echo '<input type="text" class="form-control" id="alimentacao" name="alimentacao" value="'.$result[0]["alimentacao"].'">';
        echo '</div>';
        echo '<div class="form-group col-md-4">';
            echo '<label for="habitos">Hábitos</label>';
            echo '<input type="text" class="form-control" id="habitos" name="habitos" value="'.$result[0]["habitos"].'">'; 
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-12">';
            echo '<label for="distribuicaoGeografica">Distribuição geográfica</label>';
            echo '<input type="text" class="form-control" id="distribuicaoGeografica" name="distribuicaoGeografica" value="'.$result[0]["distribuicao_geografica"].'">';
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-12">';
            echo '<label for="outrasinformacoes">Outras informações</label>';
            echo '<input type="text" class="form-control" id="outrasInformacoes" name="outrasInformacoes" value="'.$result[0]["outras_informacoes"].'">';
        echo '</div>';
    echo '</div>';

?>