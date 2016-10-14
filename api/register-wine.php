<?php
    //include '../db/config.php';
    //$conn = getDatabaseConnection(); //gets database connection
    $host = "localhost";
    $dbname = "wc_db";
    $username = "root";
    $password = "";
    try{
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn = $dbConn;
    }
    catch(PDOException $e){
            echo $e->getMessage();
    }

if(isset($_POST["regWine"])){

    $producer = $_POST["producer"];
    $name = $_POST["wname"];
    $vintage = $_POST["vintage"];
    $wine_style = $_POST["wine_styles"];
    $grape = $_POST["grape"];

    $region_country = $_POST["country"];
    $region_state = $_POST["state"];
    $region = $_POST["region"];//optional so test it
    $sub_region =$_POST["sRegion"]; //optional so test it
    $alcohol_percentage = $_POST["alcohol"];

    if("" == trim($_POST['grape'])){//TESTS, trims entry to see if it's empty, if it is value set to empty NOT NULL
        $grape = '';
    }
    if("" == trim($_POST['region'])){
        $region = '';
    }
    if("" == trim($_POST['sRegion'])){
        $sub_region = '';
    }
    $sequel = "INSERT INTO table_8
    VALUES ('$producer', '$name','$vintage', '$wine_style', '$grape', '$region_country'
    '$region_state', '$region', '$sub_region', '$alcohol_percentage')";//SQL insert statement.

    $conn->exec($sequel);
}
?>
