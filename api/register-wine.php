<?php
        echo 'Here';
        //include 'db.include.php';
        //$conn = getDatabaseConnection(); //gets database connection
        $host = "localhost";
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
    
    if(isset($_POST["regWine"])){
        echo "form not empty";
        $producer = $_POST["producer"];
        echo $producer;
        $name = $_POST["wname"];
        echo $name;
        $vintage = $_POST["vintage"];
        echo $vintage;
        $wine_style = $_POST["wine_styles"];
        echo $wine_style;
        $grape = $_POST["grape"];
        echo $grape;
    
        $region_country = $_POST["country"];
        echo $region_country;
        $region_state = $_POST["state"];
        echo $region_state;
        $region = $_POST["region"];//optional so test it
        echo $region;
        $sub_region =$_POST["sRegion"]; //optional so test it
        echo $sub_region;
        $alcohol_percentage = $_POST["alcohol"];
        echo $alcohol_percentage;
    
        if("" == trim($_POST['grape'])){//TESTS, trims entry to see if it's empty, if it is value set to empty NOT NULL
            $grape = '';
        }
        if("" == trim($_POST['region'])){
            $region = '';
        }
        if("" == trim($_POST['sRegion'])){
            $sub_region = '';
        }
        /*echo 'before sql';
        $sequel = "INSERT INTO wine_bottle (producer, grape, region, alcohol, vintage) VALUES ("test", "test","test",12.5 ,1234)";
        */
        echo "something"; 
        $sequel = "INSERT INTO TABLE_8" .
        "(Producer, Wine_Name, Vintage, Wine_Style, Grapes, Country, State, City, Region, Sub_Region)" .
        "VALUES('$producer', '$name','$vintage', 'sparkling', '$grape', '$region_country', '$region_state', 'city',
        '$region', '$sub_region')";//SQL insert statement. FOUND ERRORS HERE, MUST BE SINGLE QUOTES IN STRINGS
        echo $sequel;
    
        //$conn->exec($sequel);
    }
?>