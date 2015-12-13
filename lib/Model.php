<?php
class Model {
    protected $_db;
    
    function __construct($id = null) {
        $this->_db = new Database();
        $this->_db->query('SET NAMES utf8');
        $this->_db->query('SET CHARACTER_SET utf8_unicode_ci');
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