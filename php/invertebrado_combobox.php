<?php
    require("connection_db_mysql.php");

    $stmt = $conn->prepare("SELECT * FROM invertebrados");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i < count($result); $i++){
        echo '<option value="'.$result[$i]["id_invertebrado"].'">'.$result[$i]["nome_vulgar"].'</option>';              
    }
?>