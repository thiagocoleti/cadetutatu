<?php
    require("connection_db_mysql.php");

    $id_inv = $_GET["id_inv"];

    $stmt = $conn->prepare("DELETE FROM invertebrados WHERE id_invertebrado = :id");
    $stmt->bindParam(":id", $id_inv);
    $stmt->execute();

    $stmt_image = $conn->prepare("DELETE FROM invertebrados_imagens WHERE id_invertebrado = :id");
    $stmt_image->bindParam(":id", $id_inv);
    $stmt_image->execute();

    $stmt_ref = $conn->prepare("DELETE FROM invertebrados_referencias WHERE id_invertebrado = :id");
    $stmt_ref->bindParam(":id", $id_inv);
    $stmt_ref->execute();

    header("Location: ../lista_invertebrado.php");
?>