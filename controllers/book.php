<?php
class Book extends Controller {

    function __construct() {
        parent::__construct();
        
        $this->_author = Loader::loadModel('author');   
        $this->_authors = Loader::loadModel('authors');    
        $this->_book = Loader::loadModel('book');    
        $this->_books = Loader::loadModel('books');   
        $this->_genre = Loader::loadModel('genre'); 
    }
    function newBook()
    {        
        $idAuthor = $_GET['idAuthor'];
        $author = $this->_author->findAuthorById($idAuthor);
        //var_dump($author);        
        
        $smarty = $this->_smarty;
        $smarty->registerObject('author',$author);
        $smarty->display('book/new_book.tpl');             
    }
    function addBook() 
    {                     
        $this->_book->insertBookForAuthor();  
        $idBook = $this->_book->idBook;
        $idAuthor = $this->_book->idAuthor;        
        
        $this->showBook($idBook, $idAuthor);
    }
    
    function showBook($idBook = null, $idAuthor = null)
    {   
        
        $forFormDelete = (empty($_GET['forFormDelete'])) ? false : (bool)$_GET['forFormDelete'];
        if ($forFormDelete === true) {
            $idBook = (int)$_GET['idBook'];
            $surnameAuthor = $_GET['surnameAuthor'];
            $idAuthor = (int)$_GET['idAuthor'];
            /*
            echo 'idBook = ' . var_dump($idBook);
            echo 'surnameAuthor = ' . var_dump($surnameAuthor);
            echo 'idAuthor = ' . var_dump($idAuthor);
            echo 'forFormDelete = ' . var_dump($forFormDelete);
            */
        }
        //var_dump($idAuthor);
        
        $book = $this->_book->findBookById($idBook);
                
        $book->idAuthor = $idAuthor;
        $book->fillBookWithAuthors($idBook);
        $book->fillBookWithGenres($idBook);     
        
        $arr = $book->prepareArrayForSmarty($idBook);                   
        if (isset($arr[$idBook]['authors'])) {
            $authors = $book->arrForSmarty[$book->idBook]['authors'];
        } 
        
        if (isset($arr[$idBook]['genres'])) {
            $genres = $book->arrForSmarty[$book->idBook]['genres'];
        } else {
            $genres = '';
        }

        $smarty = $this->_smarty;        
        $smarty->registerObject('book',$book);
        
        
        $smarty->assign('authors', $authors);
        $smarty->assign('genres', $genres);        
        
        if ($forFormDelete === true) {
            $smarty->assign('idAuthor', $idAuthor);
            $smarty->assign('surnameAuthor', $surnameAuthor);
            $smarty->display('book/delete_book.tpl');          
            exit;
        }                 
        $smarty->assign('idAuthor', $idAuthor);
                
        $smarty->display('book/show_book.tpl');    
    }
    function showEditBook()
    {        
        $idBook = (int) $_GET['idBook'];
        $idAuthor = (int) $_GET['idAuthor'];        
        
        $book = $this->_book->findBookById($idBook);
        $book->fillBookWithAuthors($book->idBook);
        
        $arr = $book->prepareArrayForSmarty($book->idBook);        
        $arrAuthors = $arr[$book->idBook]['authors'];
        
        $smarty = $this->_smarty;
        $smarty->registerObject('book',$book);
        
        $smarty->assign('idAuthor',$idAuthor);
        $smarty->assign('authors', $arrAuthors);
        
        $smarty->display('book/edit_book.tpl');
        
    }
    function editBook()
    {
        $book = $this->_book;        
        $book->editBook();
        $idAuthor = $this->_book->idAuthor;
        $url = BOOKMANAGER_PATH . 'author/showAuthorById/id/' . $idAuthor;
        header("Location: $url");   
    }
    function deleteBook()
    {                
        $idBook = $_POST['idBook'];
        $idAuthor = $_POST['idAuthor'];
        $book = $this->_book;       
                
        $book->findBookById($idBook);
        $book->deleteBook();
        
        $url = BOOKMANAGER_PATH . 'author/showAuthorById/id/' . $idAuthor;
        header("Location: $url");        
    }
}