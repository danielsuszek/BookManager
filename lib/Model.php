<?php
class Model {
    protected $_db;
    
    function __construct($id = null) {
        $this->_db = new Database();                
        $this->_db->query('SET NAMES utf8 COLLATE utf8_polish_ci');
        $this->_db->query('SET CHARACTER_SET utf8_unicode_ci');
        $this->_db->query('SET collation_connection = utf8_polish_ci');
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
    public function __set($name, $value)
    {
        $name = ucfirst($name);
        $setter = 'set' . $name;
        try {
            if (! method_exists($this, $setter)) {
                throw new Exception(
                        'Funkcja ' . $setter . ' nie istnieje');
            }
        } catch (Exception $e) {
            echo "Wystąpiły problemy <br>";
            echo $e;
        }
        
        return $this->$setter($value);
    }
    
    function getModel() {
        return $this;
    }

}