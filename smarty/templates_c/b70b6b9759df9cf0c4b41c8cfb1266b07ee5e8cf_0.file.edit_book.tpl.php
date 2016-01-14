<?php
/* Smarty version 3.1.28, created on 2016-01-13 19:01:48
  from "/home/daniel/Projects/BookManager/smarty/templates/book/edit_book.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5696910cc6aee0_90949664',
  'file_dependency' => 
  array (
    'b70b6b9759df9cf0c4b41c8cfb1266b07ee5e8cf' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/book/edit_book.tpl',
      1 => 1452708095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5696910cc6aee0_90949664 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_11686115035696910cc2ce20_02761407',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_19220339445696910cc32679_14412765',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:book/edit_book.tpl */
function block_11686115035696910cc2ce20_02761407($_smarty_tpl, $_blockParentStack) {
?>
My Page Title<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:book/edit_book.tpl */
function block_19220339445696910cc32679_14412765($_smarty_tpl, $_blockParentStack) {
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
                    
                    <?php
$_from = $_smarty_tpl->tpl_vars['authors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_author_0_saved_item = isset($_smarty_tpl->tpl_vars['author']) ? $_smarty_tpl->tpl_vars['author'] : false;
$__foreach_author_0_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['author'] = new Smarty_Variable();
$__foreach_author_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_author_0_total) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['author']->value) {
$__foreach_author_0_saved_local_item = $_smarty_tpl->tpl_vars['author'];
?>
                        <div class="author">
                        <?php echo $_smarty_tpl->tpl_vars['author']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value['surname'];?>

                        </div>
                        <ul id="otherAttr">
                            <li>data ur. <?php echo $_smarty_tpl->tpl_vars['author']->value['birth'];?>
</li>
                            <li>id autora: <?php echo $_smarty_tpl->tpl_vars['author']->value['idAuthor'];?>
</li>
                        </ul>
                    <?php
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_0_saved_local_item;
}
}
if ($__foreach_author_0_saved_item) {
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_0_saved_item;
}
if ($__foreach_author_0_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_author_0_saved_key;
}
?>
                    
                </td>

                <td>                    
                    <form class="inputForm" action="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
book/editBook" method="POST">
                        <div>
                        <label for="title">Tytuł</label>
                        <input type="text" id="title" name="title" value="<?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->title;?>
" required />
                        </div>
                        <div>
                        <label for="isbn">ISBN</label>
                        <input type="text" id="isbn" name="isbn" value="<?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->isbn;?>
" pattern="\d*"/>
                        </div>
                        <div>
                        <label for="isbn">Liczba stron</label>
                        <input type="text" id="pagesNr" name="pagesNr" value="<?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->pagesNr;?>
" pattern="\d*" />
                        <div>
                        
                        <label for="description">Opis</label>
                        <textarea id="description" name="description" ><?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->description;?>
</textarea>
                        </div>
                        <div>
                        <label for="price">Cena (format 99.99)</label>
                        <input type="text" id="price" name="price" value="<?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->price;?>
" pattern="^\d+(\.)*(\d)*$" required/>
                        </div>
                        <input type="hidden" name="idAuthor"  value="<?php echo $_smarty_tpl->tpl_vars['idAuthor']->value;?>
"/>
                        <input type="hidden" name="idBook"  value="<?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->idBook;?>
"/>
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
<?php
}
/* {/block 'body'} */
}
