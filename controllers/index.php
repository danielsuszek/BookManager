<?php
class Index extends Controller {

    function __construct() {
        parent::__construct();
        
        // include model albums_model
        $this->_autor_model = Loader::loadModel('autor');
        $this->_ksiazka = Loader::loadModel('ksiazka');
        
        
    }
    
    function index() 
    {   
        $this->_autor_model->fillAutor(1);
        
        
        $this->_ksiazka->fillKsiazka(2);
        $ksiazka = $this->_ksiazka;
        // var_dump($tytul);
        // echo $tytul;
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