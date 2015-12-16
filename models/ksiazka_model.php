<?php
class Ksiazka_Model extends Model 
{        
    private $_idKsiazka;
    private $_tytul;
    private $_isbn;
    private $_liczbaStr;
    private $_opis;
    private $_cenaNetto;
    private $_cenaBrutto;
    private $_aktywna;
     
    // kolekcja obiektów Gatunek
    private $_gatunki = Array();
    
    function __construct() {
        parent::__construct();
    }
    
    function fillKsiazka($id)
    {
       
        $this->_idKsiazka = $id;
        $sql = "SELECT * FROM ksiazka WHERE ksiazka.id_ksiazka = " . $this->_idKsiazka;
        $result = $this->_db->query($sql);
        $data = $result->fetchAll();    
        $data = $data[0];        
        // print_r($data);
        
        $this->_tytul = $data['tytul'];
        $this->_isbn = $data['isbn'];
        $this->_liczbaStr = $data['liczba_str'];
        $this->_opis = $data['opis'];
        $this->_cenaNetto = $data['cena_netto'];
        $this->_cenaBrutto = $data['cena_brutto'];
        $this->_aktywna = $data['aktywna'];
    }
    
    function fillGatunki($idKsiazka)
    {   
        $sql = "SELECT gatunek.id_gatunek FROM gatunek "
                ."JOIN ksiazka_gatunek ON "
                . "gatunek.id_gatunek = ksiazka_gatunek.id_gatunek "
                . "WHERE id_ksiazka = " . $idKsiazka;                        
        $result = $this->_db->query($sql);
        $ids_gatunek = $result->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($ids_gatunek as $id_gatunek) {
           $gatunek = Loader::loadModel('gatunek');
           $id = $id_gatunek['id_gatunek'];
           $gatunek->fillGatunek($id);
           
           $this->_gatunki[] = $gatunek->getGatunek();
        }

    }
    function getIdKsiazka()
    {
        return $this->_idKsiazka;
    }
    function getTytul()
    {
        return $this->_tytul;
    }
    function getIsbn()
    {
        return $this->_isbn;
    }
    function getLiczbaStr()
    {
        return $this->_liczbaStr;
    }
    function getOpis()
    {
        return $this->_opis;
    }
    function getCenaNetto()
    {
        return $this->_cenaNetto;
    }
    function getCenaBrutto()
    {
        return $this->_cenaBrutto;
    }
    function getAktywna()
    {
        return $this->_aktywna;
    }
    function getKsiazka()
    {
        return $this;
    }
}    