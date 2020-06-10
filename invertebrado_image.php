<?php
    require("connection_db_mysql.php");

    $image = $_FILES["imageUpload"];
    $id_inv = $_POST["id_inv"];

    if($image["error"]) {
        throw new Exception("Error: ".$image["error"]);
    }

    var_dump($image);

    $dirUploads = "img-registered";

    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }

    $imageFileName = "0000".$id_inv.date("dmyhis")."inv".".jpeg";

    $cam_image = $dirUploads. DIRECTORY_SEPARATOR. "invertebrados". DIRECTORY_SEPARATOR. $imageFileName;

    if (move_uploaded_file($image["tmp_name"], $cam_image)){
        $stmt = $conn->prepare("INSERT INTO invertebrados_imagens (id_invertebrado, fot_inv_caminho) VALUES(:id, :cam)");

        $stmt->bindParam(":id", $id_inv);
        $stmt->bindParam(":cam", $cam_image);

        var_dump($stmt);
        $stmt->execute();
    } else {
        throw new Exception("Não foi possível realizar o upload");   
    }
?>