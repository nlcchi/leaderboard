<?php

class ConnectionManager{

    public function getConnection() {
        $servername = 'lumi-db.mysql.database.azure.com';
        $username = 'lumiadmin';
        $password = 'root01@dashboard';
        $dbname = 'lumi-db';
        $port = 3306;
        
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);     
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if fail, exception will be thrown

        // Return connection object
        return $conn;
    }
}

?>
