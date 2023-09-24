<?php

class ConnectionManager{

    public function getConnection() {
        $con = mysqli_init();
        mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
        mysqli_real_connect($conn, "lumi-db.mysql.database.azure.com", "lumiadmin", "root01@dashboard", "leaderboard", 3306, MYSQLI_CLIENT_SSL);

        // Return connection object
        return $conn;
    }
}

?>
