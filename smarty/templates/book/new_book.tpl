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
                    {author->name} {author->surname}
                    <ul id="otherAttr">
                        <li>id autora: {author->idAuthor}</li>
                        <li>data ur. {author->birth}</li>            
                    </ul>
                </td>

                <td>

                    <form class="inputForm" action="{#APPLICATION_PATH#}book/addBook" method="POST">
                        <div>
                        <label for="title">Tytuł</label>
                        <input type="text" id="title" name="title" required />
                        </div>
                        <div>
                        <label for="isbn">ISBN</label>
                        <input type="text" id="isbn" name="isbn" pattern="\d*"/>
                        </div>
                        <div>
                        <label for="isbn">Liczba stron</label>
                        <input type="text" id="pagesNr" name="pagesNr" pattern="\d*" />
                        <div>
                        
                        <label for="description">Opis</label>
                        <textarea id="description" name="description"></textarea>
                        </div>
                        <div>
                        <label for="price">Cena (format 99.99)</label>
                        <input type="text" id="price" name="price" pattern="^\d+(\.)*(\d)*$" required/>
                        </div>
                        <input type="hidden" name="idAuthor"  value="{author->idAuthor}"/>                        
                        <div class="button">
                            <button type="submit">Dodaj książkę</button>
                        </div>
                    </form>
                        

                </td>
                <td>
                    gatunki
                </td>
        </tbody>
    </table>
  
</form>
{/block}