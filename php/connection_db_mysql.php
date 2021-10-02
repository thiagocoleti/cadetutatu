<?php
    define("SERVERNAME", "localhost");
    define("USERNAME", "gIssamu");
    define("PASSWORD", "localhost");
    define("DBNAME", "cadetutatu");

    try{
        $conn = new PDO('mysql:host='.SERVERNAME.';dbname='.DBNAME, USERNAME, PASSWORD);
    } catch(PDOException $e){
        throw new \Exception("connection failed, error:".$e);
    }
?>  
