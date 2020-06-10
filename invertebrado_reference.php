<?php
    require("connection_db_mysql.php");

    $id_inv = $_POST["id_inv"];
    $reference = $_POST["referencia"];

    $stmt = $conn->prepare("INSERT INTO invertebrados_referencias (ref_descricao, id_invertebrado) VALUES(:ref, :id)");

    $stmt->bindParam(":ref", $reference);
    $stmt->bindParam(":id", $id_inv);

    $stmt->execute();
?>