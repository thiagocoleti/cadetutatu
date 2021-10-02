<?php
    require("connection_db_mysql.php");

    $id_plan = $_GET["id_plan"]; 

    $stmt = $conn->prepare("DELETE FROM plantas WHERE id_planta = :id");
    $stmt->bindParam(":id", $id_plan);
    $stmt->execute();

    $stmt_image = $conn->prepare("DELETE FROM planta_imagens  WHERE id_planta = :id");
    $stmt_image->bindParam(":id", $id_plan);
    $stmt_image->execute();

    // $stmt_ref = $conn->prepare("DELETE FROM planta_referencias WHERE id_planta = :id");
    // $stmt_ref->bindParam(":id", $id_plan);
    // $stmt_ref->execute();

    header("Location: ../lista_planta.php");

?>