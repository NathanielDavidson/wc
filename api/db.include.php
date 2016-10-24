<?php
    function getDatabaseConnection() {
        //echo "db";
        $host = getenv('IP');
        $dbname = "wc_db";
        $username = "masloph";
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