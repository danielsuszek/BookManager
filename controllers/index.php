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
        $this->view->autor = $this->_autor_model;
        
        $this->_ksiazka->fillKsiazka(1);
        $ksiazka = $this->_ksiazka;
        // var_dump($tytul);
        // echo $tytul;
        // $this->view->ksiazka = $this->_ksiazka_model;
        
        
        $smarty = new Smarty;
        // var_dump($smarty);
        $smarty->setTemplateDir(APPLICATION_PATH . 'smarty/templates');
        $smarty->setCompileDir(APPLICATION_PATH . 'smarty/templates_c');
        $smarty->setCacheDir(APPLICATION_PATH . 'smarty/cache');
        $smarty->setConfigDir(APPLICATION_PATH . 'smarty/configs');
        
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