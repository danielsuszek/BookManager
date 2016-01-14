<?php
class Author extends Controller {

    function __construct() {
        parent::__construct();
        
        // include models
        $this->_authors = Loader::loadModel('authors');
        $this->_author = Loader::loadModel('author');
        
    }
    function newAuthor()
    {
        $smarty = $this->_smarty;
        // $smarty->assign('books', $arrBooksForSmarty);  
        $smarty->display('author/new_author.tpl');             
    }
    function addAuthor() 
    {                 
        echo 'addAuthor()';
    }
    function showAuthorById($idAuthor = null)
    {        
        if (empty($idAuthor)) {
            $idAuthor = (int) $_POST['idAuthor'];
        }

        $author = $this->_author->findAuthorById($idAuthor);        
        $author->fillAuthorWithBooks($idAuthor);
        $books = $author->prepareBooksArrayForSmarty($idAuthor);
        //var_dump($author);
        
        $smarty = $this->_smarty;
        $smarty->registerObject('author',$author);
        
        $smarty->assign('books', $books);
        $smarty->display('author/show_author.tpl');

        
    }

}