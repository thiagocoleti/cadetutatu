<?php
    require("connection_db_mysql.php");

    
    $stmt = $conn->prepare("SELECT id_invertebrado, nome_vulgar FROM invertebrados");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
    	
    
    for($i = 0; $i < count($result); $i++){

    	if ($result[$i]["id_invertebrado"] == $id){
			echo '<option value="'.$result[$i]["id_invertebrado"].' selected">'.$result[$i]["nome_vulgar"].'</option>';
    	}
    	else {
        	echo '<option value="'.$result[$i]["id_invertebrado"].'">'.$result[$i]["nome_vulgar"].'</option>';
        }              
    }
?>