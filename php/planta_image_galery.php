<?php
    require_once("connection_db_mysql.php");

    $stmt = $conn->prepare("SELECT * FROM vertebrados_imagens");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    for($i = 0; $i < count($result); $i++){
        $id_plan = $result[$i]["id_planta"];

        $stmt2 = $conn->prepare("SELECT * FROM plantas WHERE id_planta = :id");
        $stmt2->bindParam(":id", $id_plan);
        $stmt2->execute();

        $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        echo '<div class="card" style="width: 25%;">';
        echo '<img class="card-img-top" src="'.$result[$i]["fot_plan_caminho"].'" alt="Planta">';
            echo '<div class="card-body">';
                echo '<p class="card-text">Nome: '.$result2[0]["nome_vulgar"].'<br>'. 'Nome Científico: '.$result2[0]["nome_cientifico"].'</p>';
            echo '</div>';
        echo '</div>';
    }
?>