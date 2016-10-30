
<?php

class Database {
        private static $instance = NULL;
        private function __construct() {}
        private function __clone() {}
        
        
public static function getInstance() {
        //hardcoded values need to change later 
        if(!isset(self::$instance)){
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO("mysql:host=127.0.0.1;dbname=wc_db", "masloph", "");
        }
    return self::$instance;
    }
}


?>