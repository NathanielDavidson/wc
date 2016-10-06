
<?php
    include '../db/config.php';
    $conn = getDatabaseConnection(); //gets database connection


    $query = $_GET["query"];

    $sql = "SELECT Producer, Wine_Name,Vintage, Wine_Style FROM TABLE_8 WHERE Wine_Name LIKE '%$query%' OR Producer LIKE '%$query%'";


    $statement = $conn->prepare($sql); // prevents sql injection
    $statement->execute( array(":varsearch" => $varsearch ,":samesearch" => $varsearch));
    $record = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    // // adds an extra key to each array that will be used in the front end
    // for ($i = 0; $i < count($record); $i++) {
    //     if( preg_match("/[wW]hite/", $record[$i]['Wine_Style']) == 1 ){
    //         $record[$i]['destination'] = 'white';
    //
    //     }else{
    //         $record[$i]['destination'] = 'red';
    //     }
    //
    // }



    header('Content-type: application/json');

    echo json_encode($record);


?>
