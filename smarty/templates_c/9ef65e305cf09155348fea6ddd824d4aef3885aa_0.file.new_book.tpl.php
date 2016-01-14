<?php
/* Smarty version 3.1.28, created on 2016-01-12 16:35:26
  from "/home/daniel/Projects/BookManager/smarty/templates/book/new_book.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56951d3eb63765_72275491',
  'file_dependency' => 
  array (
    '9ef65e305cf09155348fea6ddd824d4aef3885aa' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/book/new_book.tpl',
      1 => 1452611803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56951d3eb63765_72275491 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_62826900656951d3eb446c1_93725768',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_9712768256951d3eb49eb2_21658089',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:book/new_book.tpl */
function block_62826900656951d3eb446c1_93725768($_smarty_tpl, $_blockParentStack) {
?>
My Page Title<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:book/new_book.tpl */
function block_9712768256951d3eb49eb2_21658089($_smarty_tpl, $_blockParentStack) {
?>
                 
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
                    <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->name;?>
 <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->surname;?>

                    <ul id="otherAttr">
                        <li>id autora: <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->idAuthor;?>
</li>
                        <li>data ur. <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->birth;?>
</li>            
                    </ul>
                </td>

                <td>

                    <form class="inputForm" action="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
book/addBook" method="POST">
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
                        <input type="hidden" name="idAuthor"  value="<?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->idAuthor;?>
"/>                        
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
<?php
}
/* {/block 'body'} */
}
