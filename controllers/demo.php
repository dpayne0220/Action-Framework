<?php

switch ($this->getBootstrap()->action) {
    case 'index':
    include_once '../model/login.php';
    include_once '../views/login.php';
    break;
    
    case 'experience':
    include_once '../model/experience.php';
    include_once '../views/experience.php';    
    break;
    
    case 'data':
    include_once '../model/data.php';
    include_once '../views/data.php';    
    break;
    
    case 'frontend':
    include_once '../model/frontend.php';
    include_once '../views/frontend.php';    
    break;
    
    case 'db_demo':
    echo 'db_demo';
    break;

    default:
    echo '404 error';
    break;
    
}


?>