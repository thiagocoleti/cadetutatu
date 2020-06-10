<?php
    require("connection_db_mysql.php");

    $image = $_FILES["imageUpload"];
    $id_ver = $_POST["id_ver"];

    if($image["error"]) {
        throw new Exception("Error: ".$image["error"]);
    }

    var_dump($image);

    $dirUploads = "img-registered";

    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }

    $imageFileName = "0000".$id_ver.date("dmyhis")."ver".".jpeg";

    $cam_image = $dirUploads. DIRECTORY_SEPARATOR. "vertebrados". DIRECTORY_SEPARATOR. $imageFileName;

    if (move_uploaded_file($image["tmp_name"], $cam_image)){
        $stmt = $conn->prepare("INSERT INTO vertebrados_imagens (id_vertebrado, fot_ver_caminho) VALUES(:id, :cam)");

        $stmt->bindParam(":id", $id_ver);
        $stmt->bindParam(":cam", $cam_image);

        var_dump($stmt);
        $stmt->execute();
    } else {
        throw new Exception("Não foi possível realizar o upload");   
    }


?>