
<?php
    require_once("connection_db_mysql.php");

    if (isset($_POST["id_inv"])){
        $id = $_POST["id_inv"];
    }
    else{
        $id = -1;
    }

   
   
        $sql = "SELECT invertebrados_imagens.fot_inv_caminho, invertebrados.nome_cientifico, invertebrados.nome_vulgar
                FROM invertebrados_imagens, invertebrados where invertebrados_imagens.id_invertebrado = :id
                and invertebrados.id_invertebrado = invertebrados_imagens.id_invertebrado";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id);
    

    //echo $stmt;

    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0){
    
        echo "<div class='container'>";
        echo "<div class='row'>";
       
        for($i = 0; $i < count($result); $i++){     
            
                echo '<div class="card col-sm-12 col-md-12 col-lg-6 col-xl-6  ">';                
                   echo '<div class="card-body">';


                        echo '<p class="card-text"><b>Nome:  </b>'.$result[$i]["nome_vulgar"].'<br>'. '<b> Nome Científico: </b> '.$result[$i]["nome_cientifico"].'</p> <br>'; 

                        echo '<img  style="width: 100%" class="card-img-top" src="'.$result[$i]["fot_inv_caminho"].'" alt="Invertebrado">';

                   echo '</div>';
                echo '</div>';            
          
        }
        echo "</div>";  //fecha div da ROW
        echo "</div>";  // fecha div da container
    }
    else {
        echo "<div class='container text-center'>";
        echo '<p> Não há imagens registradas para esse invertebrado!!! </p>'; 
        echo '</div>';
    }        
?>

</body>

</html>
