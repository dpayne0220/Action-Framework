<?php

class Autoloader {
    public function __construct () {
        require_once('Application.php');
        require_once('Config.php');
        require_once('Db.php');

    }

}

?>