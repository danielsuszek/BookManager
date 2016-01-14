<?php
class Index extends Controller {

    function __construct() {
        parent::__construct();
        
        // include models
        $this->_authors = Loader::loadModel('authors');
        $this->_author = Loader::loadModel('author');
        $this->_books = Loader::loadModel('books');
        $this->_book = Loader::loadModel('book');        
        $this->_genre = Loader::loadModel('genre');                
    }
    function index() 
    {                 
        $smarty = $this->_smarty;        
        $arrAuthorsForSmarty = '';        
        $arrBooksForSmarty = '';
        
        $authors = $this->_authors;        
        $books = $this->_books;
        
        $findMethod = (empty($_POST['findMethod'])) ?  '' : $_POST['findMethod'];      
        
        if ($findMethod == 'author') {                                    
            
            $authorsByName = $authors->getAuthorsByName();     
            if (is_array($authorsByName)) {
                foreach ($authorsByName as $author) {        
                    $arrAuthorsForSmarty[$author->idAuthor]['idAuthor']  = $author->idAuthor;
                    $arrAuthorsForSmarty[$author->idAuthor]['name']      = $author->name;
                    $arrAuthorsForSmarty[$author->idAuthor]['surname']   = $author->surname;
                    $arrAuthorsForSmarty[$author->idAuthor]['birth']     = $author->birth;
                    $arrAuthorsForSmarty[$author->idAuthor]['books']     = $author->arrBooks;       
                }
            $smarty->assign('books', ''); 
            $smarty->assign('authors', $arrAuthorsForSmarty);   
            $smarty->display('index.tpl');
            } else {
                $message = "Nie znaleziono autora";
                $smarty->assign('message', $message);
                $smarty->display('not_found.tpl');
            }
            
        }
        if ($findMethod == 'title') {
            $booksByTitle = $books->getBooksByTitle();
            //var_dump($booksByTitle);
            if (is_array($booksByTitle)) {
                foreach($booksByTitle as $book) {
                    $arrBooksForSmarty[$book->idBook]['idBook'] = $book->idBook;
                    $arrBooksForSmarty[$book->idBook]['title'] = $book->title;
                    $arrBooksForSmarty[$book->idBook]['isbn'] = $book->isbn;
                    $arrBooksForSmarty[$book->idBook]['pagesNr'] = $book->pagesNr;
                    $arrBooksForSmarty[$book->idBook]['description'] = $book->description;
                    $arrBooksForSmarty[$book->idBook]['priceNetto'] = $book->priceNetto;
                    $arrBooksForSmarty[$book->idBook]['price'] = $book->price;
                    $arrBooksForSmarty[$book->idBook]['active'] = $book->active;
                                          
                    $arrBooksForSmarty[$book->idBook]['authors'] = $book->arrForSmarty[$book->idBook]['authors'];   
                    if (isset($book->arrForSmarty[$book->idBook]['genres'])) {
                        $arrBooksForSmarty[$book->idBook]['genres'] = $book->arrForSmarty[$book->idBook]['genres'];                                        
                    }
                }
                $smarty->assign('authors', '');  
                $smarty->assign('books', $arrBooksForSmarty); 
                $smarty->display('index.tpl');
            } else {
                $message = "Nie znaleziono tytułu";
                $smarty->assign('message', $message);
                $smarty->display('not_found.tpl');
            }          
        }  
        if ($findMethod == 'genre') {
            $message = "Przepraszamy, szukanie według gatunku na razie nie działa ...";
            $smarty->assign('message', $message);
            $smarty->display('not_found.tpl');
        }
        if ($findMethod == '') {
            $smarty->assign('message', '');
            $smarty->display('not_found.tpl');
        }
        
    }

}