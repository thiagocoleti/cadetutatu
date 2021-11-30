<?php
    define("SERVERNAME", "");
    define("USERNAME", "");
    define("PASSWORD", "");
    define("DBNAME", "");

    try{
        $conn = new PDO('mysql:host='.SERVERNAME.';dbname='.DBNAME, USERNAME, PASSWORD);
    } catch(PDOException $e){
        throw new \Exception("connection failed, error:".$e);
    }
?>  
