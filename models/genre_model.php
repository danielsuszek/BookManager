<?php
class Genre_Model extends Model 
{        
    private $_idGenre;
    private $_name;
    private $_active;
    
    function __construct() {
        parent::__construct();
    }
    
    function findGenre($id)
    {                
        $sql = "SELECT * FROM gatunek WHERE gatunek.id_gatunek = " . $id;
        $result = $this->_db->query($sql);
        $data = $result->fetch(PDO::FETCH_ASSOC);                            
        // print_r($data);        
        $this->_idGenre = $data['id_gatunek'];
        $this->_name = $data['nazwa'];        
        $this->_active = $data['aktywny'];
                
        return $this;
    }        
        
    function getIdGenre()
    {
        return $this->_idGenre;
    }
    function getName()
    {
        return $this->_name;
    }
    function getActive()
    {
        return $this->_active;
    }
    
    function getGenre()
    {
        return $this;
    }
    
    function setIdGenre($idGenre)
    {
        if (is_numeric($idGenre)) {
            $this->_idGenre = $idGenre;
        } else {
            echo 'Musi być dodatnią liczbą';
        }
        
    }
    function setName($name)
    {
        if (is_string($name)) {
            $this->_name = $name;
        } else {
            echo 'Musi być string';
        }
    }
    function setActive($active)
    {
        if (is_bool($active)) {
            $this->_active = $active;
        } else {
            echo 'Musi być typu boolean';
        }
    }
    
}    