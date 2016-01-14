{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}    
<form id="find-author" action="{#APPLICATION_PATH#}index/findAuthorByName" method="POST" accept-charset="ISO-8859-2">    
    <label for="author-name">Imię</label>
    <input type="text" id="author-name" name="author-name"/>
    <label for="author-surname">Nazwisko</label>
    <input type="text" id="author-surnaname" name="author-surname"/>
    <input type="submit" id="submit" name="submit" value="Szukaj"/>
</form>    
    <p>test2</p>
<table id="books-list">
    <thead>
    <td>Autor</td><td>Książka</td><td>Gatunek</td>
    </thead>
    <tbody>
        
            
        {foreach from=$booksArr key=idbook item=bookitem}  
        <tr>
            <td>
                {author->name} {author->surname}
            </td>       
            <td>
                <h3>{$booksArr[$idbook]['title']}</h3>

                <div class="bookAttr">ISBN: {$booksArr[$idbook]['isbn']}</div>    
                <div class="bookAttr">Opis: {$booksArr[$idbook]['description']}</div>
                <div class="bookAttr">id: {$idbook}</div>
                {if $booksArr[$idbook]['otherAuthors']|@count > 0 }                                                
                Pozostali autorzy:    
                    <ul id="otherAttr">
                    {foreach from=$booksArr[$idbook] key=i item=inner}
                       {if $i == 'otherAuthors'}
                          {foreach from=$booksArr[$idbook]['otherAuthors'] item=other}
                              <li>{$other.name} {$other.surname}</li>
                          {/foreach}
                       {/if}
                    {/foreach}
                    </ul>
                {/if}
            </td>
            <td>
                {foreach from=$booksArr[$idbook] key=i item=inner}
                    {if $i == 'genres'}
                        {foreach from=$booksArr[$idbook]['genres'] item=genre}
                            <p>{$genre.name}</p>
                        {/foreach}
                    {/if}
                {/foreach}    
            </td>                
        </tr>
        {/foreach} {* all books of author *}     
            
    </tbody>
    
</table>
{/block}