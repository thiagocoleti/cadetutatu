<?php
    require_once("connection_db_mysql.php");

    $stmt = $conn->prepare("SELECT * FROM invertebrados_referencias");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i < count($result); $i++){
        $name_posi = $result[$i]["id_invertebrado"];
         
        $stmt2 = $conn->prepare("SELECT * FROM invertebrados WHERE id_invertebrado = :id");
        $stmt2->bindParam(":id", $name_posi);
        $stmt2->execute();

        $result_name = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        
        echo'<tr>';                          
            echo'<td>'.$result_name[0]["nome_vulgar"].'</td>';
            echo'<td>'.$result[$i]["ref_descricao"].'</td>';
        echo'</tr>';
    }
?>