<?php
require_once('../bootstrap.php');
require_once('../library/Autoloader.php');

        $autoload = new Autoloader();


        $application = new Application();

        $application->render();

?>