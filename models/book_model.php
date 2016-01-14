<?php
class Book_Model extends Model 
{        
    private $_idBook;
    private $_title;
    private $_isbn;
    private $_pagesNr;
    private $_description;
    private $_priceNetto;
    private $_price;
    private $_active;
    
    private $_idAuthor;
    private $_surnameAuthor;
    // collection of Genre objects
    private $_genres = Array();    
    private $_authors = Array();
    
    // array for Smarty
    private $_arrForSmarty = Array();
    
    function __construct() {
        parent::__construct();
    }
    
    function findBookById($id)
    {               
        $sql = "SELECT * FROM ksiazka WHERE ksiazka.id_ksiazka = " . $id;
        $result = $this->_db->query($sql);
        $data = $result->fetch(PDO::FETCH_ASSOC);            
        
        $this->_idBook = $id;
        $this->_title = $data['tytul'];
        $this->_isbn = $data['isbn'];
        $this->_pagesNr = $data['liczba_str'];
        $this->_description = $data['opis'];
        $this->_priceNetto = $data['cena_netto'];
        $this->_price = $data['cena_brutto'];
        $this->_active = $data['aktywna'];
        
        return $this;
    }
    
    function fillBookWithGenres($idBook)
    {   
        $sql = "SELECT gatunek.id_gatunek FROM gatunek "
                ."JOIN ksiazka_gatunek ON "
                . "gatunek.id_gatunek = ksiazka_gatunek.id_gatunek "
                . "WHERE id_ksiazka = " . $idBook;                        
        $result = $this->_db->query($sql);
        $ids_genres = $result->fetchAll(PDO::FETCH_ASSOC);                
        foreach ($ids_genres as $idGenre) {           
           $genre = Loader::loadModel('genre');
           $idGenre = $idGenre['id_gatunek'];
           $genre->findGenre($idGenre);
           
           $this->_genres[$idGenre] = $genre->getGenre();           
        }
        
        return $this->_genres;
    }
    function fillBookWithAuthors($idBook)
    {
        $sql = "SELECT autor.id_autor FROM autor "
                . "JOIN autor_ksiazka ON "
                . "autor.id_autor = autor_ksiazka.id_autor "
                . "WHERE id_ksiazka = " . $idBook;
        $result = $this->_db->query($sql);
        $ids_authors = $result->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($ids_authors as $idAuthor) {
            $author = Loader::loadModel('author');                        
            $idAuthor = $idAuthor['id_autor'];
            $author->findAuthorById($idAuthor);
                        
            $this->_authors[$idAuthor] = $author->getAuthor();
        }
        
        return $this->_authors;
    }
    function prepareArrayForSmarty($idBook)
    {                
        $bookGenres = $this->_genres;
        if (is_array($bookGenres) && count($bookGenres)) {
            foreach($bookGenres as $genre) {
                
                $a[$genre->idGenre]['idGenre']     = $genre->idGenre;
                $a[$genre->idGenre]['name']        = $genre->name;
                $a[$genre->idGenre]['active']      = $genre->active;
            }
            $this->_arrForSmarty[$idBook]['genres'] = $a;
        }
        
        $bookAuthors = $this->_authors;        
        if (is_array($bookAuthors) && count($bookAuthors)) {
            
            foreach($bookAuthors as $author) {
                $aut[$author->idAuthor]['idAuthor']     = $author->idAuthor;
                $aut[$author->idAuthor]['name']         = $author->name;
                $aut[$author->idAuthor]['surname']      = $author->surname;
                $aut[$author->idAuthor]['birth']        = $author->birth;
                $aut[$author->idAuthor]['active']       = $author->active;
            }
            $this->_arrForSmarty[$idBook]['authors'] = $aut;
        }        
        return $this->_arrForSmarty;
    }
    function insertBookForAuthor()
    {
        //var_dump($_POST);
        $this->title = $_POST['title'];
        $this->isbn = (int)$_POST['isbn'];
        $this->pagesNr = (int)$_POST['pagesNr'];
        $this->description = $_POST['description'];
        $this->price = (int)$_POST['price'];
        // is computed inside book_model
        $this->priceNetto = $this->price;
                
        $this->idAuthor = (int) $_POST['idAuthor'];
        
        //var_dump($this);
        try {
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->_db->beginTransaction();
            $sql = "INSERT INTO ksiazka(tytul, isbn, liczba_str, opis, cena_netto, cena_brutto) 
                    VALUES (:title, :isbn, :pagesNr, :description, :priceNetto, :price)";
            $stmt = $this->_db->prepare($sql);
            
            $title = $this->title; $isbn = $this->isbn; $pagesNr = $this->pagesNr; 
            $description = $this->description; $price = $this->price; $priceNetto = $this->priceNetto;

            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':isbn', $isbn);
            $stmt->bindParam(':pagesNr', $pagesNr);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':priceNetto', $priceNetto);
            $stmt->execute();
            
            $this->_idBook = $this->_db->lastInsertId();
            
            $sql = "INSERT INTO autor_ksiazka (id_autor, id_ksiazka)
                    VALUES (:idAuthor, :idBook)";
            $idAuthor = $this->idAuthor;
            $idBook = $this->_idBook;
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':idAuthor', $idAuthor);
            $stmt->bindParam(':idBook', $idBook);
            $stmt->execute();
                    
            $this->_db->commit();
        } catch(Exception $e) {
            $this->_db->Rollback();
            echo 'Wystąpiły problemy z dodaniem książki ...';
        }
            
    }
    function editBook()
    {
        $this->idBook = (int) $_POST['idBook'];
        $this->title = $_POST['title'];
        $this->isbn = (int)$_POST['isbn'];
        $this->pagesNr = (int)$_POST['pagesNr'];
        $this->description = $_POST['description'];
        $this->price = (int)$_POST['price'];
        // is computed inside book_model
        $this->priceNetto = $this->price;
                
        $this->idAuthor = (int) $_POST['idAuthor'];
        
        //var_dump($this);
        try {
            /*
            $sql = "UPDATE movies SET filmName = :filmName, 
            filmDescription = :filmDescription, 
            filmImage = :filmImage,  
            filmPrice = :filmPrice,  
            filmReview = :filmReview  
            WHERE filmID = :filmID";
            $stmt = $pdo->prepare($sql);                                  
            $stmt->bindParam(':filmName', $_POST['filmName'], PDO::PARAM_STR);       
            $stmt->bindParam(':filmDescription', $_POST['$filmDescription'], PDO::PARAM_STR);    
            $stmt->bindParam(':filmImage', $_POST['filmImage'], PDO::PARAM_STR);
            // use PARAM_STR although a number  
            $stmt->bindParam(':filmPrice', $_POST['filmPrice'], PDO::PARAM_STR); 
            $stmt->bindParam(':filmReview', $_POST['filmReview'], PDO::PARAM_STR);   
            $stmt->bindParam(':filmID', $_POST['filmID'], PDO::PARAM_INT);   
            $stmt->execute(); 
             * $sql = "INSERT INTO ksiazka(tytul, isbn, liczba_str, opis, cena_netto, cena_brutto) 
                    VALUES (:title, :isbn, :pagesNr, :description, :priceNetto, :price)";
            */ 
            $sql = "UPDATE ksiazka SET "
                    . "tytul = :title,"
                    . "isbn = :isbn,"
                    . "liczba_str = :pagesNr,"
                    . "opis = :description,"
                    . "cena_brutto = :price,"
                    . "cena_netto = :priceNetto"
                    . " WHERE id_ksiazka = :idBook";
            $stmt = $this->_db->prepare($sql);
            $title = $this->title;
            $isbn = $this->isbn;
            $pagesNr = $this->pagesNr;
            $description = $this->description;
            $price = $this->price;
            $priceNetto = $this->priceNetto;
            $idBook = $this->idBook;
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':isbn', $isbn);
            $stmt->bindParam(':pagesNr', $pagesNr);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':priceNetto', $priceNetto);
            $stmt->bindParam(':idBook', $idBook);
            $stmt->execute();
        } catch (Exception $ex) {
            echo 'Wystąpiły problemy z edycją książki ...';
        }
    }
    function deleteBook()
    {            
       $idBook = $this->idBook;
       
       try {            
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_db->beginTransaction();                
        
        $sql = "DELETE FROM autor_ksiazka WHERE id_ksiazka = :idBook";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':idBook', $idBook, PDO::PARAM_INT);   
        $stmt->execute();
        
        if (count($this->_genres) > 0) {
            $sql = "DELETE FROM ksiazka_gatunek WHERE id_ksiazka = :idBook";
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':idBook', $idBook, PDO::PARAM_INT);   
            $stmt->execute();
        }
        
        $sql = "DELETE FROM ksiazka WHERE id_ksiazka = :idBook";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':idBook', $idBook, PDO::PARAM_INT);   
        $stmt->execute();
        
        $this->_db->commit();
        
       } catch (Exception $ex) {
           $this->_db->Rollback();
           echo 'Wystąpiły problemy z usunięciem książki ...';
       }              
     
    }
    function getIdBook()
    {
        return $this->_idBook;
    }
    function getTitle()
    {
        return $this->_title;
    }
    function getIsbn()
    {
        return $this->_isbn;
    }
    function getPagesNr()
    {
        return $this->_pagesNr;
    }
    function getDescription()
    {
        return $this->_description;
    }
    function getPriceNetto()
    {
        return $this->_priceNetto;
    }
    function getPrice()
    {
        return $this->_price;
    }
    function getActive()
    {
        return $this->_active;
    }
    function getGenres()
    {
        return $this->_genres;
    }
    function getAuthors()
    {
        return $this->_authors;
    }
    function getBook()
    {
        return $this;
    }
    function getArrForSmarty()
    {
        return $this->_arrForSmarty;
    }
    function getIdAuthor()
    {
        return $this->_idAuthor;
    }
    function getSurnameAuthor()
    {
        return $this->_surnameAuthor;
    }
    function setIdBook($idBook)
    {
        if (is_int($idBook) && $idBook > 0) {
            $this->_idBook = $idBook;
        }
    }
    function setTitle($title)
    {
        if (!empty($title) && is_string($title)) {
            $this->_title = $title;
        }
    }
    function setIsbn($isbn)
    {
        if (is_int($isbn) && $isbn > 0) {
            $this->_isbn = $isbn;
        }
    }
    function setDescription($description)
    {
        if (!empty($description) && is_string($description)) {
            $this->_description = $description;
        }
    }
    function setPagesNr($pagesNr)
    {
        if (is_int($pagesNr) && $pagesNr > 0) {
            $this->_pagesNr = $pagesNr;
        }
    }
    function setPriceNetto($price)
    {
        $vat = 5;        
        $priceNetto = ($price / (100 + $vat)) * 100;
        $priceNetto = round($priceNetto, 2);
        $this->_priceNetto = $priceNetto;
    }
    function setPrice($price)    
    {        
        if (is_int($price) && $price > 0) {
            $this->_price = $price;
        }
    }
    function setIdAuthor($idAuthor)
    {
        if (is_int($idAuthor) && $idAuthor > 0) {
            $this->_idAuthor = $idAuthor;
        }
    }
    function setSurnameAuthor($surnameAuthor)
    {        
        $this->_surnameAuthor = $surnameAuthor;
     
    }
    
    
}    