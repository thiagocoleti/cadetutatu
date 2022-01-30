<?php 
    require("connection_db_mysql.php");

    $id_usu =$_SESSION["idusuario"]; 

    $sql = "select usuarios.nome_usuario, usuarios.email_usuario, usuarios.depto_usuario,
                if (usuarios.tipo_usuario='A','ADMINISTRADOR','PESQUISADOR') as tipo
                from usuarios where usuarios.id_usuario = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id_usu);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<div class="row">';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-nome">Nome</label>'; 
            echo '<input type="text" class="form-control" id="cad-nome" name="nome" value="'.$result[0]["nome_usuario"].'" disabled>';
        echo '</div>';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-email">E-mail</label>'; 
            echo '<input type="text" class="form-control" id="cad-email" name="email" value="'.$result[0]["email_usuario"].'" disabled>';
        echo '</div>';        
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-depto">Departamento</label>';
            echo '<input type="text" class="form-control" id="cad-depto" name="dept" value="'.$result[0]["depto_usuario"].'" disabled>';
        echo '</div>';
        echo '<div class="form-group col-md-6">';
            echo '<label for="cad-tipo">Função</label>';
            echo '<input type="text" class="form-control" id="cad-funcao" name="funcao" value="'.$result[0]["tipo"].'" disabled>'; 
        echo '</div>';
    echo '</div>';
    
    
?>