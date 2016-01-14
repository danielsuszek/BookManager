<?php
class Books_Model extends Model {
    private $_books;
    
    function __construct() {
        parent::__construct();        
    }
    public function getBooksByTitle()
    {
        $title = (empty($_POST['title'])) ? '' : strtoupper($_POST['title']);

        $data = '';
        
        if (!empty($title)) {
            $sth = $this->_db->prepare('SELECT * FROM ksiazka '
                . 'WHERE UPPER(ksiazka.tytul) =  ?  COLLATE utf8_polish_ci');
            $sth->execute(array($title));
            $data = $sth->fetchAll(PDO::FETCH_ASSOC); 
        }

        if (is_array($data) && count($data) > 0) {
            foreach($data as $d) {            
                $book = Loader::loadModel('book');
                $idBook = $d['id_ksiazka'];
                $book->findBookById($idBook);
                $book->fillBookWithAuthors($idBook);                                
                $book->fillBookWithGenres($idBook);                
                $book->prepareArrayForSmarty($idBook);
                                
                $this->_books[$idBook] = $book;
            }    
        }
        
        return $this->_books;
    }
    
}    