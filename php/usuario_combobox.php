<?php
    require("connection_db_mysql.php");

    $stmt = $conn->prepare("SELECT id_usuario, nome_usuario FROM usuarios"); 

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i < count($result); $i++) {
        echo '<option value="'.$result[$i]["id_usuario"].'">'.$result[$i]["nome_usuario"].'</option>';
   
    }

?>