<?php
    define("SERVERNAME", "localhost");
    define("USERNAME", "Testes");
    define("PASSWORD", "root");
    define("DBNAME", "teste_cadetutatu");

    try{
        $conn = new PDO('mysql:host='.SERVERNAME.';dbname='.DBNAME, USERNAME, PASSWORD);
    } catch(PDOException $e){
        throw new \Exception("connection failed, error:".$e);
    }
?>