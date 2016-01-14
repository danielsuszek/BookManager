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
{if isset({author->idAuthor})}
<table id="books-list">
        <col class="author">
        <col class="book">
        <col class="genre">
        <thead>
        <td>Autor</td><td>Książka</td><td>Gatunek</td>
        </thead>
        <tbody> 
            
                {if is_array($books) && count($books)}
                    {foreach from=$books key=i item=book}
                    <tr>
                        <td>
                            <div class="author">
                            {author->name} {author->surname}
                            </div>
                            <ul id="otherAttr">
                                <li>data ur. {author->birth}</li>
                                <li>id autora: {author->idAuthor}</li>
                            </ul>
                            <a class="button" href="{#APPLICATION_PATH#}book/newBook?idAuthor={author->idAuthor}"><button>Dodaj książkę</button></a>
                        </td>                
                        
                        
                        <td>
                            <div class="book">
                            {$books[$i]['title']}
                            </div>
                            <ul id="otherAttr">        
                                <li>ISBN: {$books[$i]['isbn']}</li>
                                <li>Liczba stron: {$books[$i]['pagesNr']}</li>
                                <li>Cena: {$books[$i]['price']} zł</li>
                                <li>Cena netto: {$books[$i]['priceNetto']} zł</li>
                                <li>Opis:</li>
                                <div class="otherInfo">{$books[$i]['description']}</div>  
                            {foreach from=$books[$i] key=k item=item}
                                {if $k == 'otherAuthors'}
                                    {foreach from=$books[$i][$k] item=a}                                    
                                        <li>Współautor: </li>
                                        <ul id="otherAttr">                                            
                                            <li>{$a['name']} {$a['surname']}</li>
                                        </ul>    
                                    {/foreach}    
                                {/if}                                  
                            {/foreach}  
                            </ul>
                            <a class="button delete" 
                   href="{#APPLICATION_PATH#}book/showBook?idBook={$books[$i]['idBook']}&surnameAuthor={author->surname}&idAuthor={author->idAuthor}&forFormDelete=true">
                            <button>Usuń książkę</button></a>
                            
                            <a class="button" href="{#APPLICATION_PATH#}book/showEditBook?idBook={$books[$i]['idBook']}&idAuthor={author->idAuthor}">
                            <button>Edytuj książkę</button></a>
                          </td>
                        <td>
                            {foreach from=$books[$i] key=k item=item}                            
                                {if $k == 'genres'}
                                    {foreach from=$books[$i][$k] item=g}
                                        {$g['name']}
                                    {/foreach}
                                {/if} 
                            {/foreach}
                        </td>
                    </tr>      
                    {/foreach}    
                {/if}    
                </td>
                        
        </tbody>
</table>    
{/if}
{/block}