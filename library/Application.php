<?php

class Application {
    protected $_bootstrap;
    protected $info;

    public function getBootstrap()
    {
        if (null === $this->_bootstrap) {
            $this->_bootstrap = new Bootstrap();
        }
        return $this->_bootstrap;
    }


    public function bootstrap($resource = null)
    {
        $this->getBootstrap()->bootstrap($resource);

        return $this;
    }
    
    public function render() {
        
        require_once('../templates/'.$this->getBootstrap()->template.'/header.php');

       if(! @include_once('../controllers/'.$this->getBootstrap()->controller.'.php')) {
            print("404 error");
        }
        
        require_once('../templates/'.$this->getBootstrap()->template.'/footer.php');
        
    }
}
?>