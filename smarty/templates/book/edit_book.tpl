{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}                 
    <table id="books-list">
        <col class="author">
        <col class="book">
        <col class="genre">
        <thead>
        <td>Autor</td><td>Książka</td><td>Gatunek</td>
        </thead>
        <tbody> 
            <tr>
                
                <td>
                    
                    {foreach from=$authors key=i item=author}
                        <div class="author">
                        {$author['name']} {$author['surname']}
                        </div>
                        <ul id="otherAttr">
                            <li>data ur. {$author['birth']}</li>
                            <li>id autora: {$author['idAuthor']}</li>
                        </ul>
                    {/foreach}
                    
                </td>

                <td>                    
                    <form class="inputForm" action="{#APPLICATION_PATH#}book/editBook" method="POST">
                        <div>
                        <label for="title">Tytuł</label>
                        <input type="text" id="title" name="title" value="{book->title}" required />
                        </div>
                        <div>
                        <label for="isbn">ISBN</label>
                        <input type="text" id="isbn" name="isbn" value="{book->isbn}" pattern="\d*"/>
                        </div>
                        <div>
                        <label for="isbn">Liczba stron</label>
                        <input type="text" id="pagesNr" name="pagesNr" value="{book->pagesNr}" pattern="\d*" />
                        <div>
                        
                        <label for="description">Opis</label>
                        <textarea id="description" name="description" >{book->description}</textarea>
                        </div>
                        <div>
                        <label for="price">Cena (format 99.99)</label>
                        <input type="text" id="price" name="price" value="{book->price}" pattern="^\d+(\.)*(\d)*$" required/>
                        </div>
                        <input type="hidden" name="idAuthor"  value="{$idAuthor}"/>
                        <input type="hidden" name="idBook"  value="{book->idBook}"/>
                        <input type="hidden" name="surnameAuthor"  value=""/>
                        <div class="button">
                            <button type="submit">Edytuj książkę</button>
                        </div>
                    </form>
                        

                </td>
                <td>
                    
                </td>
        </tbody>
    </table>
  
</form>
{/block}