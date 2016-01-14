{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
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
{if is_array($authors) && count($authors) > 0}
<table id="books-list">
        <col class="author">
        <col class="book">
        <col class="genre">
        <thead>
        <td>Autor</td><td>Książka</td><td>Gatunek</td>
        </thead>
        <tbody> 
            <tr>
            {foreach from=$authors key=idAuthor item=author}                            
                
                
                {foreach from=$authors[$idAuthor]['books'] key=idBook item=books}      
                <tr>
                    <td>
                        <div class="author">
                        {$author['name']} {$author['surname']}
                        </div>
                        <ul id="otherAttr">
                            <li>data ur. {$author['birth']}</li>
                            <li>id autora: {$author['idAuthor']}</li>
                        </ul>
                        
                            <a class="button" href="{#APPLICATION_PATH#}book/newBook?idAuthor={$author['idAuthor']}"><button>Dodaj książkę</button></a>
                    </td>
                    <td>{* {$authors[$idAuthor]['books'][$idBook]['title']} *}                                                                    
                        <div class="book">
                        {$books['title']}            
                        </div>
                        
                        <ul id="otherAttr">                            
                            <li>ISBN: {$books['isbn']}</li>
                            <li>Liczba stron: {$books['pagesNr']}</li>
                            <li>Cena: {$books['price']} zł</li>
                            <li>Cena netto: {$books['priceNetto']} zł</li>
                            <li>Opis:</li>
                            <div class="otherInfo">{$books['description']}</div>                            
                            {foreach from=$authors[$idAuthor]['books'][$idBook] key=i item=bookAttr}                                
                            {if $i == 'otherAuthors' }                                                          
                                {foreach from=$authors[$idAuthor]['books'][$idBook]['otherAuthors'] key=k item=otherAuthors}
                                <li>Współautor:</li>
                                <ul id="otherAttr"><li>{$otherAuthors['name']} {$otherAuthors['surname']}<li></ul>
                                {/foreach}    
                            {/if}
                            {/foreach}  
                        </ul>
                        {*
                        <form class="delete" action="{#APPLICATION_PATH#}book/deleteBook" method="POST">
                            <input type="hidden" name="idBook" value="{$books['idBook']}" />
                            <button>Go to user 123</button>
                        </form>
                        *}
                        <a class="button delete" 
                   href="{#APPLICATION_PATH#}book/showBook?idBook={$books['idBook']}&idAuthor={$author['idAuthor']}&surnameAuthor={$author['surname']}&forFormDelete=true">
                            <button>Usuń książkę</button></a>
                        <a class="button" href="{#APPLICATION_PATH#}book/showEditBook?idBook={$books['idBook']}&idAuthor={$author['idAuthor']}">
                            <button>Edytuj książkę</button></a>                        
                    </td>                    
                    <td>
                        {foreach from=$authors[$idAuthor]['books'][$idBook] key=i item=bookAttr}                                
                            {if $i == 'genres' }                                
                                {foreach from=$authors[$idAuthor]['books'][$idBook]['genres'] key=k item=genre}
                                    {$genre['name']}
                                {/foreach}    
                            {/if}
                        {/foreach}  
                    </td> 
                </tr>
                {/foreach}
            
            {/foreach}    
            </tr>
        </tbody>
</table>    
{/if}   
{if is_array($books) && count($books) > 0}
<table id="books-list">
        <col class="author">
        <col class="book">
        <col class="genre">
        <thead>
        <td>Książka</td><td>Autor</td><td>Gatunek</td>
        </thead>
        <tbody>     
            <tr>    
            {foreach from=$books key=idBook item=book}
            <tr>
                <td>
                    <div class="book">
                    {$book['title']}            
                    </div>

                    <ul id="otherAttr">                            
                        <li>ISBN: {$book['isbn']}</li>
                        <li>Liczba stron: {$book['pagesNr']}</li>
                        <li>Cena: {$book['price']} zł</li>
                        <li>Cena netto: {$book['priceNetto']} zł</li>
                        <li>Opis:</li>
                        <div class="otherInfo">{$book['description']}</div>                                                    
                    </ul>
                </td>
                <td>
                {foreach from=$books[$idBook] key=k item=item}
                    {if $k == 'authors'}
                        {foreach from=$books[$idBook][$k] key=l item=author}
                            <div class="author">
                            {$author['name']} {$author['surname']}
                            </div>
                            <ul id="otherAttr">
                                <li>data ur. {$author['birth']}</li>
                                <li>id autora: {$author['idAuthor']}</li>
                            </ul>
                        {/foreach}
                    {/if}
                {/foreach}    
                <a class="button" href="#">Dodaj książkę</a>
                </td>
                <td>
                {foreach from=$books[$idBook] key=k item=item}
                    {if $k == 'genres'}
                        {foreach from=$books[$idBook][$k] key=l item=genre}
                            {$genre['name']}
                        {/foreach}
                    {/if}
                {/foreach}  
                </td>
            </tr>
            {/foreach}    
            </tr>
    </tbody>
</table>      
{/if}    
{/block}