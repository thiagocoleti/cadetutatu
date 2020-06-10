<?php
    require("connection_db_mysql.php");

    $stmt = $conn->prepare("SELECT * FROM invertebrados");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i <count($result); $i++){
        echo '<tr>';			      
            echo '<td>'.$result[$i]["nome_vulgar"].'</td>';
            echo '<td>'.$result[$i]["nome_cientifico"].'</td>';
            echo '<td>';
                echo '<a href="alterar_invertebrado.php?id_inv='.$result[$i]["id_invertebrado"].'"><i class="far fa-edit" title="Alterar"></i></a>';
                echo '<i class="fas fa-search-plus" title="Ver detalhes"></i>';
                echo '<a href="invertebrado_delete.php?id_inv='.$result[$i]["id_invertebrado"].'"><i class="far fa-trash-alt" title="Excluir"></i></a>';      
            echo '</td>';
        echo '</tr>';
    }
?>