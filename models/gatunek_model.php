<?php
class Gatunek_Model extends Model 
{        
    private $_idGatunek;
    private $_nazwa;
    private $_aktywny;
    
    function __construct() {
        parent::__construct();
    }
    
    function fillGatunek($id)
    {        
        $this->_idGatunek = $id;
        $sql = "SELECT * FROM gatunek WHERE gatunek.id_gatunek = " . $this->_idGatunek;
        $result = $this->_db->query($sql);
        $data = $result->fetchAll();    
        $data = $data[0];        
                
        // print_r($data);
        
        $this->_idGatunek = $data['id_gatunek'];
        $this->_nazwa = $data['nazwa'];        
        $this->_aktywny = $data['aktywny'];
        
        
        
    }        
    
    function getIdGatunek()
    {
        return $this->_idGatunek;
    }
    function getNazwa()
    {
        return $this->_nazwa;
    }
    function getAktywny()
    {
        return $this->_aktywny;
    }
    
    function getGatunek()
    {
        return $this;
    }
}    