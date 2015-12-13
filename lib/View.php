<?php
class View {
 
    function __construct() {

    }
    
    function render($viewName = '', $noInclude = false) {
        if ($noInclude) {
            require_once 'views/' . $viewName . '.php' ;
        } else {
            require_once 'views/header.php';
            require_once 'views/' . $viewName . '.php' ;
            require_once 'views/footer.php';
        }
    }
    
    /* include all js scripts from folder /views/$controller/js
     * inside /views/header.php
     */
    function includeJS($controller, $arScript) {
        foreach ($arScript as $script) {
            echo '<script type="text/javascript" src="' . APPLICATION_PATH .
            'views/' . $controller . '/js/' . $script . '"></script>';
        }
    }
    
    

}