<?php
class Bootstrap {
    private $_controller;
    private $_action;
    private $_args = array();
    
    function __construct() {
        $this->prepareUrl();
        
        // load controller with /setup/Loader::loadController()
        $controller = Loader::loadController($this->_controller);
        
        // runAction($action, Array $arg)
        // method from main Controler /lib/Controller.php        
        $controller->runAction($this->_action, $this->_args);                
    }
    
    /*
     * transform URL APPLICATION_PATH/controller/action/arg1/val1/arg2/val2/...
     * to $this->_controller = controller, $this->_action = action
     * make array from /arg1/val1/arg2/val2/... to (arg1=>val1, arg2=>val2,...)
     */
    private function prepareUrl() {             

        $url = isset($_GET['url']) ? $_GET['url'] : 'index/index';
        $arUrl = explode('/', $url);
        // to avoid index.php.php
        if ($arUrl[0] === 'index.php') {
            $arUrl[0] = 'index';
            $arUrl[1] = 'index';
        }
                
        $this->_controller = $arUrl[0];
        $this->_action = empty($arUrl[1]) ? 'index' : $arUrl[1];
        
        // make array from /arg1/val1/arg2/val2/... to (arg1=>val1, arg2=>val2,...)        
        $arUrl = array_slice($arUrl, 2);
        if (sizeof($arUrl)) {
            for ($i = 0; $i < sizeof($arUrl) ; $i++) {
                $key = $arUrl[$i]; $i++;
                $this->_args[$key] = $arUrl[$i];
            }
        } 
        
        
    }              

}


