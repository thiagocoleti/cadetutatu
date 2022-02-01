<?php
    require("connection_db_mysql.php");

    $stmt = $conn->prepare("SELECT id_usuario, nome_usuario, email_usuario, tipo_usuario, depto_usuario FROM usuarios");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i <count($result); $i++){
            $perfil = "";
            if ($result[$i]["tipo_usuario"] == "A"){
                $perfil = "Administrador";
            }
            else if ($result[$i]["tipo_usuario"] == "P"){
                $perfil = "PESQUISADOR";
             } 
            echo '<tr>';			      
            echo '<td>'.$result[$i]["nome_usuario"].'</td>';
            echo '<td>'.$result[$i]["email_usuario"].'</td>';
            echo '<td>'.$perfil.'</td>';
            echo '<td>'.$result[$i]["depto_usuario"].'</td>';
            echo '<td>';
                echo '<a href="alterar_invertebrado.php?id_inv='.$result[$i]["id_usuario"].'"><i class="far fa-edit" title="Alterar"></i></a>';
                echo '<a href="detalhes_invertebrado.php?id_inv='.$result[$i]["id_usuario"].'"><i class="fas fa-search-plus" title="Ver detalhes"></i></a>';
                echo '<a href="php/invertebrado_delete.php?id_inv='.$result[$i]["id_usuario"].'"><i class="far fa-trash-alt" title="Excluir"></i></a>';      
            echo '</td>';
        echo '</tr>';
    }
?>