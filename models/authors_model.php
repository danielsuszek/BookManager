<?php
class Authors_Model extends Model {
    private $_authors;
    
    function __construct() {
        parent::__construct();        
    }
    private function fillAuthors($data)
    {
        if (is_array($data) and sizeof($data) > 0) {        
            foreach ($data as $d) {
                $author = Loader::loadModel('author');
                $idAuthor = $d['id_autor'];                                
                $author->findAuthorById($idAuthor);                
                
                $author->fillAuthorWithBooks($idAuthor);
                $author->prepareBooksArrayForSmarty($idAuthor);

                $this->_authors[$idAuthor] = $author;                                 
            }            
        }
    }
    public function getAuthorsByName() {
        $name = (empty($_POST['author-name'])) ? '' : $_POST['author-name'];
        
        $surname = (empty($_POST['author-surname'])) ? '' : $_POST['author-surname'];        
        $data = '';
        
        $pattern = '/^[A-Za-zęóąśłżźćńĘÓĄŚŁŻŹĆŃ]+$/i';   
        if (preg_match($pattern, $name) && (empty($surname))) {
            $sth = $this->_db->prepare('SELECT * FROM autor '
                . 'WHERE UPPER(autor.imie) = ? COLLATE utf8_polish_ci');
            $sth->execute(array($name));
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);      
        } elseif (empty($name) && preg_match($pattern, $surname)) {
            $sth = $this->_db->prepare('SELECT * FROM autor '
                . 'WHERE UPPER(autor.nazwisko) = ? COLLATE utf8_polish_ci');
            $sth->execute(array($surname));
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        } elseif (preg_match($pattern, $name) && preg_match($pattern, $surname)) {
           $sth = $this->_db->prepare('SELECT * FROM autor '
                . 'WHERE UPPER(autor.imie) =  ? COLLATE utf8_polish_ci AND UPPER(autor.nazwisko) = ? COLLATE utf8_polish_ci');
            $sth->execute(array($name, $surname));
            $data = $sth->fetchAll(PDO::FETCH_ASSOC); 
        }
        // var_dump($data);
        $this->fillAuthors($data);
        
        return $this->_authors;                 
    }
    function getAuthorById($id)    
    {
        return $this->_authors[$id];
    }
    
    
    

}