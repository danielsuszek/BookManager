<?php
class Autor_Model extends Model 
{        
    private $_idAutor;
    private $_imie;
    private $_nazwisko;
    private $_dataUr;
    private $_aktywny;
    
    function __construct() {
        parent::__construct();
    }
    
    function fillAutor($id)
    {
        $this->_idAutor = $id;
        $sql = "SELECT * FROM autor WHERE autor.id_autor = " . $this->_idAutor;
        $result = $this->_db->query($sql);
        $data = $result->fetchAll();    
        $data = $data[0];        
        // print_r($data);
        
        $this->_imie = $data['imie'];
        $this->_nazwisko = $data['nazwisko'];
        $this->_dataUr = $data['data_ur'];
        $this->_aktywny = $data['aktywny'];
    }
    function getIdAutor()
    {
        return $this->_idAutor;
    }
    function getImie()
    {
        return $this->_imie;
    }
    function getNazwisko()
    {
        return $this->_nazwisko;
    }
    function getDataUr()
    {
        return $this->_dataUr;
    }
    function getAktywny()
    {
        return $this->_aktywny;
    }
    function getAutor()
    {
        return $this;
    }
}    