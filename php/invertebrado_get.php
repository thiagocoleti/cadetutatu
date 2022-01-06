<?php
    require("connection_db_mysql.php");

    $id_inv = $_GET["id_inv"];

    $stmt = $conn->prepare("SELECT * FROM invertebrados WHERE id_invertebrado = :id");
    $stmt->bindParam(":id", $id_inv);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	
	echo "<div class='container text-center'>";            	
		echo "<b> Nome : </b>" . $result[0]["nome_vulgar"]."<br>";
		echo "<b> Nome Científico : </b>" . $result[0]["nome_cientifico"]. "<br>";
    echo ' Ver Detalhes: <a href="detalhes_invertebrado.php?id_inv='.$result[0]["id_invertebrado"].'"><i class="fas fa-search-plus" title="Ver detalhes"></i></a>' ;
  	echo '</div>';







   ?>

