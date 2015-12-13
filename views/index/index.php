<p>This is View index.php </p>
<?php
    $autor = $this->autor;
    echo $autor->idAutor;
    echo $autor->imie;
    echo $autor->nazwisko;
    echo $autor->dataUr;
    echo $autor->aktywny;
    $ksiazka = $this->ksiazka;echo "<br>";
    echo $ksiazka->idKsiazka;
    echo $ksiazka->tytul;
?>
