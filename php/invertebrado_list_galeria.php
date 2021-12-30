<?php
    require("connection_db_mysql.php");

    $stmt = $conn->prepare("SELECT * FROM invertebrados");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i <count($result); $i++){
        echo '<tr>';			      
            echo '<td>'.$result[$i]["nome_vulgar"].'</td>';
            echo '<td>'.$result[$i]["nome_cientifico"].'</td>';
            echo '<td style="text-align:center">';
                echo '<a href="galeria_invertebrado.php?id_inv='.$result[$i]["id_invertebrado"].'"><i class="far fa-images" title="Ver Galeria"></i></a>';
            echo '</td>';                
          //  echo '<td style="text-align:center">';
          //      echo '<a href="detalhes_invertebrado.php?id_inv='.$result[$i]["id_invertebrado"].'"><i class="fas fa-file-upload" title="Enviar imagens"></i></a>';
            //echo '</td>';                
           
        echo '</tr>';
    }
?>