<?php
/* Smarty version 3.1.28, created on 2016-01-13 10:20:51
  from "/home/daniel/Projects/BookManager/smarty/templates/author/show_author.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_569616f36b4a67_74301285',
  'file_dependency' => 
  array (
    'a5d6ce0f7cec1baf5dcf14cf511a921079ef53bc' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/author/show_author.tpl',
      1 => 1452676804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_569616f36b4a67_74301285 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_662398035569616f35e2a19_65140368',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_459109003569616f35ea5f5_10525395',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:author/show_author.tpl */
function block_662398035569616f35e2a19_65140368($_smarty_tpl, $_blockParentStack) {
?>
My Page Title<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:author/show_author.tpl */
function block_459109003569616f35ea5f5_10525395($_smarty_tpl, $_blockParentStack) {
?>
    
<form id="findAuthor" action="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
index/index" method="POST" >    
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
<a class="button" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
author/newAuthor"><button>Dodaj nowego autora</button></a>
<?php ob_start();
echo $_smarty_tpl->smarty->registered_objects['author'][0]->idAuthor;
$_tmp1=ob_get_clean();
if (isset($_tmp1)) {?>
<table id="books-list">
        <col class="author">
        <col class="book">
        <col class="genre">
        <thead>
        <td>Autor</td><td>Książka</td><td>Gatunek</td>
        </thead>
        <tbody> 
            
                <?php if (is_array($_smarty_tpl->tpl_vars['books']->value) && count($_smarty_tpl->tpl_vars['books']->value)) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['books']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_book_0_saved_item = isset($_smarty_tpl->tpl_vars['book']) ? $_smarty_tpl->tpl_vars['book'] : false;
$__foreach_book_0_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['book'] = new Smarty_Variable();
$__foreach_book_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_book_0_total) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['book']->value) {
$__foreach_book_0_saved_local_item = $_smarty_tpl->tpl_vars['book'];
?>
                    <tr>
                        <td>
                            <div class="author">
                            <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->name;?>
 <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->surname;?>

                            </div>
                            <ul id="otherAttr">
                                <li>data ur. <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->birth;?>
</li>
                                <li>id autora: <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->idAuthor;?>
</li>
                            </ul>
                            <a class="button" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
book/newBook?idAuthor=<?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->idAuthor;?>
"><button>Dodaj książkę</button></a>
                        </td>                
                        
                        
                        <td>
                            <div class="book">
                            <?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>

                            </div>
                            <ul id="otherAttr">        
                                <li>ISBN: <?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value]['isbn'];?>
</li>
                                <li>Liczba stron: <?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value]['pagesNr'];?>
</li>
                                <li>Cena: <?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value]['price'];?>
 zł</li>
                                <li>Cena netto: <?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value]['priceNetto'];?>
 zł</li>
                                <li>Opis:</li>
                                <div class="otherInfo"><?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value]['description'];?>
</div>  
                            <?php
$_from = $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_1_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value == 'otherAuthors') {?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['k']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_a_2_saved_item = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a'] : false;
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable();
$__foreach_a_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_a_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$__foreach_a_2_saved_local_item = $_smarty_tpl->tpl_vars['a'];
?>                                    
                                        <li>Współautor: </li>
                                        <ul id="otherAttr">                                            
                                            <li><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['a']->value['surname'];?>
</li>
                                        </ul>    
                                    <?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_2_saved_local_item;
}
}
if ($__foreach_a_2_saved_item) {
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_2_saved_item;
}
?>    
                                <?php }?>                                  
                            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
if ($__foreach_item_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_item_1_saved_key;
}
?>  
                            </ul>
                            <a class="button delete" 
                   href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
book/showBook?idBook=<?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value]['idBook'];?>
&surnameAuthor=<?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->surname;?>
&idAuthor=<?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->idAuthor;?>
&forFormDelete=true">
                            <button>Usuń książkę</button></a>
                            
                            <a class="button" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
book/showEditBook?idBook=<?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value]['idBook'];?>
&idAuthor=<?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->idAuthor;?>
">
                            <button>Edytuj książkę</button></a>
                          </td>
                        <td>
                            <?php
$_from = $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_3_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_3_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_3_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>                            
                                <?php if ($_smarty_tpl->tpl_vars['k']->value == 'genres') {?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['k']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_g_4_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$__foreach_g_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_g_4_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$__foreach_g_4_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
                                        <?php echo $_smarty_tpl->tpl_vars['g']->value['name'];?>

                                    <?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_4_saved_local_item;
}
}
if ($__foreach_g_4_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_4_saved_item;
}
?>
                                <?php }?> 
                            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_local_item;
}
}
if ($__foreach_item_3_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_item;
}
if ($__foreach_item_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_item_3_saved_key;
}
?>
                        </td>
                    </tr>      
                    <?php
$_smarty_tpl->tpl_vars['book'] = $__foreach_book_0_saved_local_item;
}
}
if ($__foreach_book_0_saved_item) {
$_smarty_tpl->tpl_vars['book'] = $__foreach_book_0_saved_item;
}
if ($__foreach_book_0_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_book_0_saved_key;
}
?>    
                <?php }?>    
                </td>
                        
        </tbody>
</table>    
<?php }
}
/* {/block 'body'} */
}
