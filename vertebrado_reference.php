<?php
    require("connection_db_mysql.php");

    $id_ver = $_POST["id_ver"];
    $reference = $_POST["referencia"];

    $stmt = $conn->prepare("INSERT INTO vertebrados_referencias (ref_descricao, id_vertebrado) VALUES(:ref, :id)");

    $stmt->bindParam(":ref", $reference);
    $stmt->bindParam(":id", $id_ver);

    $stmt->execute();

    header("Location: referencia_vertebrado.php");
?>