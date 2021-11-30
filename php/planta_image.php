<?php
    require("connection_db_mysql.php");

    $image = $_FILES["imageUpload"];
    $id_plan = $_POST["id_plan"]; 

    if($image["error"]) {
        echo "Error: " . $image["error"]; 
    }

    $stmt = $conn->prepare("
        SELECT * FROM plantas WHERE id_planta = :id
    ");
    $stmt->bindParam(":id", $id_plan);
    $stmt->execute();

    $planta = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $imageFileName = "plan" . $id_plan . "-" . $planta[0]["nome_vulgar"] . "-" . date("dmyhis") . ".jpeg"; 

    $cam_image = "img-registred/plantas" . DIRECTORY_SEPARATOR . $imageFileName;

    if (move_uploaded_file($image["tmp_name"], "../".$cam_image)){
        $stmt = $conn->prepare("
            INSERT INTO plantas_imagens (
                id_planta, 
                fot_pla_caminho
            ) 
            VALUES(:id, :cam)
        ");

        $stmt->bindParam(":id", $id_plan);
        $stmt->bindParam(":cam", $cam_image);

        $stmt->execute();
    } else {
        echo "Não foi possível realizar o upload";
    }

    header("Location:../galeria_planta.php");
?>