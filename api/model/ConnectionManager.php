<?php

class ConnectionManager{

    public function getConnection() {
        $servername = 'lumi-db.mysql.database.azure.com';
        $username = 'lumiadmin';
        $password = 'root01@dashboard';
        $dbname = 'leaderboard';
        $port = 3306;
        
        // Create connection
        $conn = new PDO(
                    "mysql:host=$servername;dbname=$dbname;port=$port"
                    , $username
                    , $password
                    ,array(
                        PDO::MYSQL_ATTR_SSL_CA => '../DigiCertGlobalRootCA.crt.pem',
                        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
                        )
                    );     
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if fail, exception will be thrown
        return $conn;
    }
}

?>
