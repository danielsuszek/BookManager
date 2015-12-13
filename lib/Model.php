<?php
class Model {
    protected $_db;
    
    function __construct($id = null) {
        $this->_db = new Database();
    }
    public function __get($name) {
        // camelCase
        $name = ucfirst($name);
        $getter = 'get'.$name;
        try {
                if (! method_exists($this, $getter)) {
                        throw new Exception(
                                        'Funkcja ' . $getter . ' nie istnieje');
                }

        } catch(Exception $e) {
                echo "Wystąpiły problemy <br>";
                echo $e;
        }

        return $this->$getter();
    }
    
    function getModel() {
        return $this;
    }

}