<?php
    require_once("connection_db_mysql.php");

    if (isset($_POST["id_ver"])){
        $id = $_POST["id_ver"];
    }
    else{
        $id = -1;
    }


   $sql = "SELECT vertebrados_imagem.fot_ver_id, vertebrados_imagem.fot_ver_caminho, vertebrados.nome_cientifico, vertebrados.nome_vulgar
                FROM vertebrados_imagem, vertebrados where vertebrados_imagem.id_vertebrado = :id
                and vertebrados.id_vertebrado = vertebrados_imagem.id_vertebrado";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($result) > 0){
    
        echo "<div class='container'>";
        echo "<div class='row'>";
       
        for($i = 0; $i < count($result); $i++){     
            
                echo '<div class="card col-sm-12 col-md-12 col-lg-4 col-xl-4  ">';                
                   echo '<div class="card-body">';


                        echo '<p class="card-text"><b>Nome:  </b>'.$result[$i]["nome_vulgar"].'<br>'. '<b> Nome Científico: </b> '.$result[$i]["nome_cientifico"].'</p> '; 

                         if ($_SESSION["tipo"] == "A"){
                            echo 'Excluir imagem: <a href="php/vertebrado_image_delete.php?id_foto='.$result[$i]["fot_ver_id"].'"><i class="far fa-trash-alt" title="Excluir"></i></a>';   
                         }

                        echo '<img  style="width: 70%" class="card-img-top" src="'.$result[$i]["fot_ver_caminho"].'" alt="Vertebrado">';



                   echo '</div>';
                echo '</div>';            
          
        }
        echo "</div>";  //fecha div da ROW
        echo "</div>";  // fecha div da container
    }
    else {
       
        echo "<div class='container text-center'>";
        echo '<p> Não há imagens registradas para esse vertebrado!!! </p>'; 
        echo '</div>';
    }        
?>