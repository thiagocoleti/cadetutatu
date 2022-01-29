<?php
    require("connection_db_mysql.php");

    $stmt = $conn->prepare("SELECT * FROM plantas");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i <count($result); $i++){
        echo '<tr>';			      
            echo '<td>'.$result[$i]["nome_vulgar"].'</td>';
            echo '<td>'.$result[$i]["nome_cientifico"].'</td>';
            echo '<td>';
                echo '<a href="alterar_planta.php?id_plan='.$result[$i]["id_planta"].'"><i class="far fa-edit" title="Alterar"></i></a>';
                echo '<a href="detalhes_planta.php?id_plan='.$result[$i]["id_planta"].'"><i class="fas fa-search-plus" title="Ver detalhes"></i></a>';

                if ($_SESSION["tipo"] == "A"){
                   echo '<a href="php/planta_delete.php?id_plan='.$result[$i]["id_planta"].'"><i class="far fa-trash-alt" title="Excluir"></i></a>';      
                }
            echo '</td>';
        echo '</tr>';
    }
?>