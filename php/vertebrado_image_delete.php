
<?php



    require("connection_db_mysql.php");

    $idfoto = $_GET["id_foto"];    

    $buscaPath = $conn->prepare("SELECT fot_ver_id, id_vertebrado, fot_ver_caminho from vertebrados_imagem where fot_ver_id = :idfoto");
    $buscaPath->bindParam(":idfoto", $idfoto);
    $buscaPath->execute();

    $result = $buscaPath->fetchAll(PDO::FETCH_ASSOC);

    
  //  echo ($result[0]["fot_inv_id"]."<br>");
  //  echo ($result[0]["id_invertebrado"]."<br>");
  //  echo ($result[0]["fot_inv_caminho"]."<br>");
    if (count($result) > 0){

        $stmt = $conn->prepare("DELETE FROM vertebrados_imagem WHERE fot_ver_id = :id");
        $stmt->bindParam(":id", $result[0]["fot_ver_id"]);
        $stmt->execute();   

       /* $caminho_excluir = "../".$result[0]["fot_inv_caminho"];
        
        echo ($caminho_excluir);
        try{
            unlink($caminho_excluir);
            echo "Excluiu normal";
        }catch(Exception $ex){
            echo "Message: ".$ex.getMessage();
        }  */


    }  
    
    header("Location: ../galeria_vertebrado.php?id_ver=". $result[0]["id_vertebrado"]); 


?>

