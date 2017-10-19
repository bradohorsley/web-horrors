<?php

class connection {
    function connect() {
         
        static $connection;
         
        if(!isset($connection)) {
            $servername = $_SERVER['RDS_HOSTNAME'];
            $username = $_SERVER['RDS_USERNAME'];
            $password = $_SERVER['RDS_PASSWORD'];
            $dbname = $_SERVER['RDS_DB_NAME'];
            $dbport = $_SERVER['RDS_PORT'];
             
            $connection = new mysqli($servername, $username, $password, $dbname, $dbport);
        }
         
        if($connection === false) {
            return mysqli_connect_error(); 
        }
        return $connection;
    }
}

?>
