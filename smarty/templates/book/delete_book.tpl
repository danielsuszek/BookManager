{extends file="layout.tpl"}
{block name=title}{/block}
{block name=body}    
<form id="findAuthor" action="{#APPLICATION_PATH#}index/index" method="POST" >    
    <select id="findMethod" name="findMethod">
        <option value="author" >Autor</option>
        <option value="title">Tytuł</option>
        <option value="genre">Gatunek</option>    
    </select> 
    <div id="byAuthor">
        <label for="author-name">Imię</label>
        <input type="text" id="author-name" name="author-name"/>
        <label for="author-surname">Nazwisko</label>
        <input type="text" id="author-surnaname" name="author-surname"/>
        
        <input type="submit" id="submit-method" name="submit-method" value="Szukaj"/>
    </div>
    <div id="byTitle">
        <label for="title">Tytuł</label>
        <input type="text" id="title" name="title"/>
        
        <input type="submit" id="submit-method" name="submit-method" value="Szukaj"/>
    </div>
    <div id="byGenre">
        <label for="genre">Gatunek</label>
        <input type="text" id="genre" name="genre"/>
        
        <input type="submit" id="submit-method" name="submit-method" value="Szukaj"/>
    </div>
</form>   
<a class="button" href="{#APPLICATION_PATH#}author/newAuthor"><button>Dodaj nowego autora</button></a>

<h1>Usunąć książke?</h1>

<table id="books-list">
        <col class="author">
        <col class="book">
        <col class="genre">
        <thead>
        <td>Książka</td><td>Autor</td><td>Gatunek</td>
        </thead>
        <tbody>                             
            <tr>
                <td>
                    <div class="book">
                    {book->title}            
                    </div>
                    
                    <ul id="otherAttr">                            
                        <li>ISBN: {book->isbn}</li>
                        <li>Liczba stron: {book->pagesNr}</li>
                        <li>Cena: {book->price} zł</li>
                        <li>Opis:</li>
                        <div class="otherInfo">{book->description}</div>                                                    
                    </ul>
                    
                </td>
                <td>
                {if is_array($authors) && count($authors) > 0}    
                    {foreach from=$authors key=i item=author}
                        <div class="author">
                        {$author['name']} {$author['surname']}
                        </div>
                        <ul id="otherAttr">
                            <li>data ur. {$author['birth']}</li>
                            <li>id autora: {$author['idAuthor']}</li>
                        </ul>
                    {/foreach}    
                {/if}
                </td>
                <td>
                {if is_array($genres) && count($genres) > 0}
                    {foreach from=$genres key=i item=genre}
                        {$genre['name']}
                    {/foreach}
                {/if}
                </td>
            </tr>
            
            
    </tbody>
</table>      
<form class="deleteForm" action="{#APPLICATION_PATH#}book/deleteBook" method="POST">               
    <input type="hidden" name="idBook" value="{book->idBook}" />
    <input type="hidden" name="findMethod"  value="author"/>
    <input type="hidden" name="idAuthor"  value="{$idAuthor}"/>
    <div class="button">
        <button type="submit">Usuń</button>
    </div>
</form>

<form class="deleteForm" action="{#APPLICATION_PATH#}index/index" method="POST">               
    <input type="hidden" name="findMethod"  value="author"/>
    <input type="hidden" name="author-surname"  value="{$surnameAuthor}"/>
    <div class="button">
        <button type="submit">Anuluj</button>
    </div>
</form>
{/block}