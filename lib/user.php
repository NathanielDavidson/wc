<?php 
include_once('database.php');

class RegUser {
    public static $name;
    public static $email;
    public function __construct(){
        
    }

   //function if the user exits 
   public static function isUser($uname){
        //select statement for pulling user name
        $db = Database::getInstance();
        $sql = "SELECT username FROM user WHERE username ='$uname'";
        $val = $db->prepare($sql);
        $val->execute();
        $shoop = $val->fetch();
        //echo $sql;
        //var_dump($shoop);
        if($uname == $shoop['username']){
            //echo "hit";
            return true;
        }
        else 
        {
            return false;
        }
    }

    public static function insertUser($username,$password,$email,$firstname,$lastname,$age,$zipcode,$employment,$cert_body,$date){
        
       $db = Database::getInstance();
       $sql= "INSERT INTO user (username, password, email,firstname,lastname, age, zipcode, employment,cert_body,date_cert) VALUES 
        ('$username','$password','$email','$firstname','$lastname',$age,$zipcode,'$employment','$cert_body',$date)";
       $val = $db->prepare($sql);
       
       if($val->execute()){
                return true;
        }
        else{
            return false;
        }
    }
    
    public static function deleteUser($uname){
        $db = Database::getInstance();
        $sql = "DELETE FROM user WHERE username ='$uname'";
        $val = $db->prepare($sql);
            if($val->execute()){
                return true;
            }
            else{
                return false;
            }
    }
}
?>