
<?php



    require("connection_db_mysql.php");

    $idfoto = $_GET["id_foto"];    

    $buscaPath = $conn->prepare("SELECT fot_inv_id, id_invertebrado, fot_inv_caminho from invertebrados_imagens where fot_inv_id = :idfoto");
    $buscaPath->bindParam(":idfoto", $idfoto);
    $buscaPath->execute();

    $result = $buscaPath->fetchAll(PDO::FETCH_ASSOC);

    
  //  echo ($result[0]["fot_inv_id"]."<br>");
  //  echo ($result[0]["id_invertebrado"]."<br>");
  //  echo ($result[0]["fot_inv_caminho"]."<br>");
    if (count($result) > 0){

        $stmt = $conn->prepare("DELETE FROM invertebrados_imagens WHERE fot_inv_id = :id");
        $stmt->bindParam(":id", $result[0]["fot_inv_id"]);
        $stmt->execute();   

      /*  $caminho_excluir = ROOTPATH."\\".$result[0]["fot_inv_caminho"];
        
        echo ($caminho_excluir);
        try{
            unlink($caminho_excluir);
            echo "Excluiu normal";
        }catch(Exception $ex){
            echo "Message: ".$ex.getMessage();
        }  */


    }  
    
    header("Location: ../galeria_invertebrado.php?id_inv=". $result[0]["id_invertebrado"]); 


?>

