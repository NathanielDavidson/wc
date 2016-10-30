<?php 
    include 'database.php';
    //echo "HI";
class RegUser {
    public static $name;
    public static $email;
    public function __construct(){
        //$this->name = "James";
        //$this->email = "Email";
        //removed, it was suggested we add these above instead of in constructor
    }   
    //changed to static
   public static function isUser($uname){
        //select statement for pulling user name
        $db = Database::getInstance();
        $sql = "SELECT username FROM login WHERE username ='$uname'";
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
       
        //var_dump($shoop);
    }
    /*
    public static function deleteUser($uname){
        $db = Database::getInstance();
        $sql = "DELETE username FROM login WHERE username ='$uname'";
        $val = $db->prepare($sql);
            if($val->execute()){
                return true;
            }
            else{
                return false;
            }
    }
    */
    //update email, password
    
    
    
}
?>