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
                echo '<a href="detalhes_invertebrado.php?id_inv='.$result[$i]["id_invertebrado"].'"><i class="fas fa-search-plus" title="Ver detalhes"></i></a>'; 
                
                  // permitirá exclusão, somente se for administrador
                  if ($_SESSION["tipo"] == "A"){
                    echo '<a href="php/invertebrado_delete.php?id_inv='.$result[$i]["id_invertebrado"].'"><i class="far fa-trash-alt" title="Excluir"></i></a>';     
                  }

                 
            echo '</td>';
        echo '</tr>';
    }
?>