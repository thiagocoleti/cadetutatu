<?php
    require_once("connection_db_mysql.php");

    $stmt = $conn->prepare("SELECT * FROM vertebrados_referencias");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i < count($result); $i++){
        $name_posi = $result[$i]["id_vertebrado"];
         
        $stmt2 = $conn->prepare("SELECT * FROM vertebrados WHERE id_vertebrado = :id");
        $stmt2->bindParam(":id", $name_posi);
        $stmt2->execute();

        $result_name = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        
        echo'<tr>';                          
            echo'<td>'.$result_name[0]["nome_vulgar"].'</td>';
            echo'<td>'.$result[$i]["ref_descricao"].'</td>';
        echo'</tr>';
    }
?>