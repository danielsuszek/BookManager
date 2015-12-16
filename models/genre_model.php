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
        $this->_idGenre= $id;
        $sql = "SELECT * FROM gatunek WHERE gatunek.id_gatunek = " . $id;
        $result = $this->_db->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);    
        $data = $data[0];        
                
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
}    