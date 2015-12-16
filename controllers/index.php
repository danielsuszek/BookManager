<?php
class Index extends Controller {

    function __construct() {
        parent::__construct();
        
        // include model albums_model
        $this->_autor = Loader::loadModel('autor');
        $this->_ksiazka = Loader::loadModel('ksiazka');
        $this->_gatunek = Loader::loadModel('gatunek');
        
    }
    
    function index() 
    {   
        $this->_autor->fillAutor(1);
        $autor = $this->_autor;
        
        $autor->fillKsiazki(1);
        
        
        
        $this->_gatunek->fillGatunek(2);
        $gatunek = $this->_gatunek;
        
        
        
        
        
        var_dump($autor);
        
        $this->_ksiazka->fillKsiazka(1);
        $this->_ksiazka->fillGatunki(1);
        
        $ksiazka = $this->_ksiazka;        
        //var_dump($ksiazka);
        
        // $this->view->ksiazka = $this->_ksiazka_model;
        
        
        $smarty = $this->_smarty;
        
        $smarty->registerObject('ksiazka',$ksiazka);
        $smarty->assign('name', 'Ned');
        $smarty->display('index.tpl');
        /*
        $this->view->model = $this->_model->getAlbums();               
      
        
         $this->view->render('index/index', true);         
         * 
         */
    }
    

}