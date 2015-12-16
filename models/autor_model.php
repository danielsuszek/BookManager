<?php
class Autor_Model extends Model 
{        
    private $_idAutor;
    private $_imie;
    private $_nazwisko;
    private $_dataUr;
    private $_aktywny;
    
    private $_ksiazki;
    
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
    function fillKsiazki($idAutor)
    {
        $sql = "SELECT ksiazka.id_ksiazka FROM ksiazka "        
                ."JOIN autor_ksiazka ON "
                . "ksiazka.id_ksiazka = autor_ksiazka.id_ksiazka "
                . "WHERE autor_ksiazka.id_autor = " . $idAutor;                        
        $result = $this->_db->query($sql);
        $ids_ksiazka = $result->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($ids_ksiazka as $id_ksiazka) {
           $ksiazka = Loader::loadModel('ksiazka');            
           $id = $id_ksiazka['id_ksiazka'];       
           $ksiazka->fillKsiazka($id);
           
           $this->_ksiazki[] = $ksiazka->getKsiazka();
        }
        
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