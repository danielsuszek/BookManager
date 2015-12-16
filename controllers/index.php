<?php
class Index extends Controller {

    function __construct() {
        parent::__construct();
        
        // include model albums_model
        /*
        
        $this->_book = Loader::loadModel('ksiazka');
        $this->_author = Loader::loadModel('author');
         * 
         */
        $this->_genre = Loader::loadModel('genre');
        
        
    }
    function test()
    {
        $genre = $this->_genre;
        
        
        
        var_dump($genre);
    }
    function index() 
    {   
        /*
        $autor = $this->_autor->findAutor(1);
        $autor->fillKsiazki($autor->idAutor);   
        var_dump($autor);
        
        
        var_dump($currBook);
        */
        /*
        $gatunek = $this->_gatunek->findGatunek(1);
        var_dump($gatunek);
        */
        /*
        $ksiazka = $this->_ksiazka->findKsiazka(1);
        $ksiazka->fillGatunki(1);
        var_dump($ksiazka);
        */
        /*
        $autor->fillKsiazki(1);                
        
        $this->_gatunek->fillGatunek(2);
        $gatunek = $this->_gatunek;
        $this->_ksiazka->fillKsiazka(1);
        $this->_ksiazka->fillGatunki(1);
        
        $ksiazka = $this->_ksiazka;        
         * 
         */
        //var_dump($ksiazka);
        
        // $this->view->ksiazka = $this->_ksiazka_model;
        
        /*
        $smarty = $this->_smarty;
        
        $smarty->registerObject('ksiazka',$ksiazka);
        $smarty->assign('name', 'Ned');
        $smarty->display('index.tpl');
         * 
         */
        /*
        $this->view->model = $this->_model->getAlbums();               
      
        
         $this->view->render('index/index', true);         
         * 
         */
    }
    

}