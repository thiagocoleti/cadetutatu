<?php
    require("connection_db_mysql.php");

    $image = $_FILES["imageUpload"];
    $id_inv = $_POST["id_inv"];

    if($image["error"]) {
        echo "Error: " . $image["error"];
    }

    $stmt = $conn->prepare("
        SELECT * FROM invertebrados WHERE id_invertebrado = :id
    ");
    $stmt->bindParam(":id", $id_inv);
    $stmt->execute();

    $invertebrado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $imageFileName = "inv" . $id_inv . "-" . $invertebrado[0]["nome_vulgar"] . "-" . date("dmyhis") . ".jpeg";

    $cam_image = "img-registred/invertebrados" . DIRECTORY_SEPARATOR . $imageFileName;

    if (move_uploaded_file($image["tmp_name"], "../".$cam_image)){
        $stmt = $conn->prepare("
            INSERT INTO invertebrados_imagens (
                id_invertebrado,
                fot_inv_caminho
            ) 
            VALUES(:id, :cam)
        ");

        $stmt->bindParam(":id", $id_inv);
        $stmt->bindParam(":cam", $cam_image);

        $stmt->execute();
    } else {
        echo "Não foi possível realizar o upload";   
    }

    header("Location: ../galeria_invertebrado.php?id_inv=". $id_inv ) ;
?>