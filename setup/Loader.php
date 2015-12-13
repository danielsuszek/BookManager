<?php
class Loader {      
    
    public static function loadLibDir($className) {        
        $libPath = './lib/';
        // array of all files from lib directory except . and ..
        $files = array_diff( scandir($libPath), Array( ".", ".." ) );

        // include all files from directory ./lib
        foreach ($files as $file) {
            include_once $libPath . $file;
        }
    }
    public static function loadController($controllerFile) {
        $controllerFile = strtolower($controllerFile);
        $controllerPath = './controllers/' . $controllerFile . '.php';        
        
        $controller = ucfirst($controllerFile);
        
        // load $controller
        try {
            if (file_exists($controllerPath)) {
                include_once ($controllerPath);

                $controller = new $controller();
                
                return $controller;
            } else {
                throw new Exception('Controller ' . $controller . 
                        ' does not exists');
            }
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }        
    }
    
    public static function loadView($viewFile) {
        $viewFile = strtolower($controllerFile);
        $controllerPath = './controllers/' . $controllerFile . '.php';        
        
        $controller = ucfirst($controllerFile);
        
        // load $controller
        try {
            if (file_exists($controllerPath)) {
                include_once ($controllerPath);

                $controller = new $controller();
                
                return $controller;
            } else {
                throw new Exception('Controller ' . $controller . 
                        ' does not exists');
            }
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }        
    }
    public static function loadModel($name) {
        $path = 'models/' . $name . '_model.php';
        if (file_exists($path)) {
            require_once $path;
            $modelName = ucfirst($name) . '_Model';
            $model = new $modelName();
            return $model;
        } 
    }
    
}