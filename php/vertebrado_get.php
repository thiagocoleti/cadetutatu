<?php
    require("connection_db_mysql.php");

    $id_ver = $_GET["id_ver"];

    $stmt = $conn->prepare("SELECT * FROM vertebrados WHERE id_vertebrado = :id");
    $stmt->bindParam(":id", $id_ver);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	
	echo "<div class='container text-center'>";            	
		echo "<b> Nome : </b>" . $result[0]["nome_vulgar"]."<br>";
		echo "<b> Nome Científico : </b>" . $result[0]["nome_cientifico"]. "<br>";
    echo ' Ver Detalhes: <a href="detalhes_vertebrado.php?id_ver='.$result[0]["id_vertebrado"].'"><i class="fas fa-search-plus" title="Ver detalhes"></i></a>' ;
  	echo '</div>';







   ?>

