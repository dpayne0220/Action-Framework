<?php

class Db {
    //protected $db;

    public function connect() {
        $config = new Config();
        //include('../conf/config.inc.php');
        $mysqli = new mysqli($config->info['db']['server'], $config->info['db']['user'], $config->info['db']['pass']);

        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        
        if(!mysqli_select_db($mysqli, $config->info['db']['schema'])){
            //print_r("db cannot be selected");
            printf($mysqli->error);
        }
        
        return $mysqli;
    }
    
    public function query($q,$conn) {
        

        $res = $conn->query($q);
        
        if (!$conn->query($q)) {
            printf($conn->error);
        }
        
        return $res;
        
    }

}

?>