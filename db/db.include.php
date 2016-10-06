<?php

function getDatabaseConnection() {
    $host = "localhost";
    $dbname = "wc_db";
    $username = "danibarra";
    $password = "@AllIn22!";

    //creates connection to database
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Setting Errorhandling to Exception
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn;
}

function getDataBySQL($sql){
    global $conn;
    $statement = $conn->prepare($sql); //prevents SQL Injection
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}
