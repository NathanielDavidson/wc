<?php
    include 'db.include.php';
    $conn = getDatabaseConnection(); //gets database connection
    $host = "localhost";
    $dbname = "wc_db";
    $username = "root";
    $password = "root";

    if(isset($_POST["regWine"])){
        echo "form not empty";

        $producer = $_POST["producer"];
        //echo $producer;
        $name = $_POST["wname"];
        //echo $name;
        $vintage = $_POST["vintage"];
        //echo $vintage;
        $wine_style = $_POST["wine_styles"];
        //echo $wine_style;
        $grape = $_POST["grape"];
        //echo $grape;

        $region_country = $_POST["country"];
        //echo $region_country;
        $region_state = $_POST["state"];
        //echo $region_state;
        $region = $_POST["region"];//optional so test it
        //echo $region;
        $sub_region =$_POST["sRegion"]; //optional so test it
        //echo $sub_region;
        $alcohol_percentage = $_POST["alcohol"];
        //echo $alcohol_percentage;

        if("" == trim($_POST['grape'])){//TESTS, trims entry to see if it's empty, if it is value set to empty NOT NULL
            $grape = '';
        }
        if("" == trim($_POST['region'])){
            $region = '';
        }
        if("" == trim($_POST['sRegion'])){
            $sub_region = '';
        }

        $sql = "INSERT INTO wine_bottle (producer, wine_name, vintage, wine_style, grapes, country, state, city, region) VALUES('$producer', '$name','$vintage', 'Sparkling', '$grape', '$region_country', 
            '$region_state', 'city','$region','$alcohol_percentage');";
        $statement = $conn->prepare($sql); //prevents SQL Injection
        $statement->execute();
    }
?>
