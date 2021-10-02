<?php
    require("connection_db_mysql.php");

    $image = $_FILES["imageUpload"];
    $id_ver = $_POST["id_ver"];

    if($image["error"]) {
        echo "Error: " . $image["error"]; 
    }

    $stmt = $conn->prepare("
        SELECT * FROM vertebrados WHERE id_vertebrado = :id
    ");
    $stmt->bindParam(":id", $id_ver);
    $stmt->execute(); 

    $vertebrado = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    $imageFileName = "ver" . $id_ver . "-" . $vertebrado[0]["nome_vulgar"] . "-" . date("dmyhis") . ".jpeg";

    $cam_image = "img-registred/vertebrados" . DIRECTORY_SEPARATOR. $imageFileName;

    if (move_uploaded_file($image["tmp_name"], "../".$cam_image)){
        $stmt = $conn->prepare("
            INSERT INTO vertebrados_imagens (
                id_vertebrado, 
                fot_ver_caminho
            ) 
            VALUES(:id, :cam)
        ");

        $stmt->bindParam(":id", $id_ver);
        $stmt->bindParam(":cam", $cam_image);

        $stmt->execute();
    } else {
        echo "Não foi possível realizar o upload";
    }

    header("Location:../galeria_vertebrado.php");
?>