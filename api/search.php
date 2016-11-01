
<?php
    include 'db.include.php';
    $conn = getDatabaseConnection(); //gets database connection
    //$query = $_GET['q'];
    $query  ="fizz";
    $sql = "SELECT producer, wine_name, vintage, wine_style FROM wine_bottle WHERE wine_name LIKE \"%" .$query. "%\" OR producer LIKE \"%". $query . "%\"";

    //echo $query';
    $statement = $conn->prepare($sql); // prevents sql injection
    $statement->execute();
    $record = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    header('Content-type: application/json');
    echo json_encode($record);

?>
