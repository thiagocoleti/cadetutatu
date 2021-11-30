<?php 
    require("connection_db_mysql.php");

    $id_plan = $_GET["id_plan"]; 

    $stmt = $conn->prepare("SELECT * FROM plantas WHERE id_planta = :id");
    $stmt->bindParam(":id", $id_plan);
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
            echo '<label for="cad-familia">Familia</label>';
            echo '<input type="text" class="form-control" id="cad-familia" name="familia" value="'.$result[0]["familia"].'" disabled>';
        echo '</div>';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-autor">Autor</label>';
            echo '<input type="text" class="form-control" id="cad-autor" name="autor" value="'.$result[0]["autor"].'" disabled>'; 
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-periodoFloracao">Periodo de Floração</label>';
            echo '<input type="text" class="form-control" id="cad-periodoFloracao" name="periodoFloracao" value="'.$result[0]["periodo_floracao"].'" disabled>';
        echo '</div>';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-periodoFrutificacao">Periodo de Frutificação</label>';
            echo '<input type="text" class="form-control" id="cad-periodoFrutificacao" name="periodoFrutificacao" value="'.$result[0]["periodo_frutificacao"].'" disabled>'; 
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-latitude">Latitude</label>';
            echo '<input type="number" step="any" class="form-control" id="cad-latitude" name="latitude" value="'.$result[0]["latitude"].'" disabled>';
        echo '</div>';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-longitude">Longitude</label>';
            echo '<input type="number" step="any" class="form-control" id="cad-longitude" name="longitude" value="'.$result[0]["longitude"].'"disabled>'; 
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