<?php
    function getDatabaseConnection() {

        $host = getenv('IP');
        $dbname = "wc_db";
        $username = "miriam230";
        $password = "";

        try{
                $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $conn = $dbConn;
        }
        catch(PDOException $e){
                echo $e->getMessage();
        }
        return $conn;
    }
?>