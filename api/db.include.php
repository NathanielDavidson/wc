<?php

function getDatabaseConnection() {
    echo "db";
    $host = "localhost";
    $dbname = "db_wc";
    $username = "root";
    $password = "root";
    /*
    AWS method:
    $dbhost = $_SERVER['RDS_HOSTNAME'];
    $dbport = $_SERVER['RDS_PORT'];
    $dbname = $_SERVER['RDS_DB_NAME'];

    $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname}";
    $username = $_SERVER['RDS_USERNAME'];
    $password = $_SERVER['RDS_PASSWORD'];

    $dbh = new PDO($dsn, $username, $password);
    
    */
    //creates connection to database
    try{
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn = $dbConn;
    }
    catch(PDOException $e){
            echo $e->getMessage();
    }
    // Setting Errorhandling to Exception
    //$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    /*$statement = $conn->prepare("INSERT INTO table_8
    VALUES ('test', 'test','1991', 'test', 'test', 'test'
    'test', 'test', 'test', '12.2')"); 
    $statement->execute();*/
    $sql = "INSERT ";
    $statement = $conn->prepare($sql); //prevents SQL Injection
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($records);
   

    return $conn;

}
/*
function getDataBySQL($sql){
    global $conn;
    $statement = $conn->prepare($sql); //prevents SQL Injection
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    die($records);
    return $records;
}*/

getDatabaseConnection();
?>