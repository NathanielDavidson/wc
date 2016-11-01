<?php
	session_start();
    include 'db.include.php';
    $conn = getDatabaseConnection(); //gets database connection

    $currentUsername = $_SESSION['username'];
    $currentPassword = $_SESSION['password'];
    if(isset($_POST['username'])){
    	$newUserName = $_POST['username'];
    	$sql = "UPDATE user
			SET username = $newUserName
			WHERE username = $currentUsername;"
		$statement = $conn->prepare($sql);
    	$statement->execute();
    }
    if(isset($_POST['password'])){
    	 $newPassword = $_POST['password'];
    	 $sql = "UPDATE user
			SET username = $newPassword
			WHERE username = $currentPassword;"
		$statement = $conn->prepare($sql);
    	$statement->execute();
    }
?>