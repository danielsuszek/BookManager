<?php
class Controller {
    protected $_model;
    protected $_smarty;
    
    function __construct() {
        $this->_smarty = Loader::loadSmarty();       
    }
    
    public function runAction($action, Array $arg) {
        try {
            if (method_exists($this, $action)) {
                // zamieniamy id z URL string na integer
                if (isset($arg['id'])) {
                    $arg = intval($arg['id']);                
                }
                $this->{$action}($arg);
                
                return;
            } else {
                throw new Exception('Action ' . $action . ' does not exists in ' . 
                        get_class($this) . ' Controller');
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }  
    

}