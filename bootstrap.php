<?php

class Bootstrap {
    
    public $action;
    public $controller;
    public $template;
    public $a;
    

    public function bootstrap() {

        //include('conf/config.inc.php');
        $config = new Config();
        
        $this->template = $config->info['template'];
        
        $get = ((@$_GET['a']) ? $_GET['a']:'');
        // provide basic injection mitigation
        $a = stripslashes(addslashes($get));
        //$a = $get;
        // provide more advanced character filtering on url string
        preg_match('[\W*]',$a,$matches0);
        if (count($matches0)==0) {
            $a = $config->info['defaultcontroller'].".index";   
        }

        //separate controller and action from url string
        preg_match('[(\w*).(\w*)]', $a, $matches);

            if (count($matches) > 0) {
                $this->controller = $matches[1];
                $this->action = $matches[2];
            }
        
        if (!$this->controller) {
            //if no controller provided, use default controller
            $this->controller = $config->info['defaultcontroller'];
        }

        if (!$this->action) {
            //if no action provided, use index
            $this->action = 'index';
        }
        
        
    }
    

}
?>