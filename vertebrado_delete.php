<?php
    require("connection_db_mysql.php");

    $id_ver = $_GET["id_ver"];

    $stmt = $conn->prepare("DELETE FROM vertebrados WHERE id_vertebrado = :id");
    $stmt->bindParam(":id", $id_ver);
    $stmt->execute();

    $stmt_image = $conn->prepare("DELETE FROM vertebrados_imagens WHERE id_vertebrado = :id");
    $stmt_image->bindParam(":id", $id_ver);
    $stmt_image->execute();

    $stmt_ref = $conn->prepare("DELETE FROM vertebrados_referencias WHERE id_vertebrado = :id");
    $stmt_ref->bindParam(":id", $id_ver);
    $stmt_ref->execute();
?>