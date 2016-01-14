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
    <h5>{$message}</h5>

{/block}