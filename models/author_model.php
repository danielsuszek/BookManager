<?php
class Author_Model extends Model 
{        
    private $_idAuthor;
    private $_name;
    private $_surname;
    private $_birth;
    private $_active;
    
    private $_books = Array();    
    // Array() for Smarty
    private $_arrBooks = Array();
    
    function __construct() {
        parent::__construct();
    }
    
    function findAuthorById($id)
    {                      
        $sql = "SELECT * FROM autor WHERE autor.id_autor = " . $id;
        
        $result = $this->_db->query($sql);
        $data = $result->fetch(PDO::FETCH_ASSOC);    
                
        //print_r($data);
        
        $this->_idAuthor = $id;
        $this->_name = $data['imie'];
        $this->_surname = $data['nazwisko'];
        $this->_birth = $data['data_ur'];
        $this->_active = $data['aktywny'];
                
        return $this;
        
    }      
    function fillAuthorWithBooks($idAuthor)
    {
        $sql = "SELECT ksiazka.id_ksiazka FROM ksiazka "        
                ."JOIN autor_ksiazka ON "
                . "ksiazka.id_ksiazka = autor_ksiazka.id_ksiazka "
                . "WHERE autor_ksiazka.id_autor = " . $idAuthor .
                " ORDER BY ksiazka.id_ksiazka DESC";
                
        $result = $this->_db->query($sql);
        $ids_books = $result->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($ids_books as $idBook) {
           $book = Loader::loadModel('book');            
           
           $idBook = $idBook['id_ksiazka'];                  
           $book->findBookById($idBook);
           $book->fillBookWithGenres($idBook);
           $book->fillBookWithAuthors($idBook);
           
           $this->_books[$idBook] = $book->getBook();
        }
        
        return $this->_books;
    }
    function prepareBooksArrayForSmarty($idAuthor)
    {
        $books = $this->_books;
        foreach($books as $book) {            
            $this->_arrBooks[$book->idBook] = array(
                'idBook'        => $book->idBook,
                'title'         => $book->title,
                'isbn'          => $book->isbn,
                'pagesNr'       => $book->pagesNr,
                'description'   => $book->description,
                'priceNetto'    => $book->priceNetto,
                'price'         => $book->price,
                'active'        => $book->active                
            );
            
            $authors = $book->authors;
            if (is_array($authors) && count($authors) > 0 ) {
                $otherAuthors = array();
                foreach ($authors as $author) {
                    if ($author->idAuthor != $idAuthor) {
                        $otherAuthors[$author->idAuthor]['idAuthor']    = $author->idAuthor;
                        $otherAuthors[$author->idAuthor]['name']        = $author->name;
                        $otherAuthors[$author->idAuthor]['surname']     = $author->surname;
                        $otherAuthors[$author->idAuthor]['birth']       = $author->birth;
                        $otherAuthors[$author->idAuthor]['active']      = $author->active;
                    }
                }
                // var_dump($otherAuthors);
                $this->_arrBooks[$book->idBook]['otherAuthors'] = $otherAuthors;
            }
        } // end foreach($books as $book)
        
        foreach($books as $book) {  
            $bookGenres = $book->genres;
            if (is_array($bookGenres) && count($bookGenres) > 0) {
                $a = array();
                foreach ($bookGenres as $genre) {
                    $a[$genre->idGenre]['idGenre']     = $genre->idGenre;
                    $a[$genre->idGenre]['name']        = $genre->name;
                    $a[$genre->idGenre]['active']      = $genre->active;
                
                }
        
                $this->_arrBooks[$book->idBook]['genres'] = $a;
            }            
        }
        
        return $this->_arrBooks;
    }
    
    function getIdAuthor()
    {
        return $this->_idAuthor;
    }
    function getName()
    {
        return $this->_name;
    }
    function getSurname()
    {
        return $this->_surname;
    }
    function getBirth()
    {
        return $this->_birth;
    }
    function getActive()
    {
        return $this->_active;
    }
    function getBooks()
    {
        return $this->_books;
    }
    function getArrBooks()
    {
        return $this->_arrBooks;
    }
    function getAuthor()
    {
        return $this;
    }
    
    function setIdAuthor($idAuthor)
    {
        $this->_idAuthor = $idAuthor;
    }
    function setName($name)
    {
        $this->_name = $name;
    }
    function setSurname($surname)
    {
        $this->_surname = $surname;
    }
    function setBirth($birth)
    {
        $this->_birth = $birth;
    }
    function setActive($active)
    {
        $this->_active = $active;
    }
}    
