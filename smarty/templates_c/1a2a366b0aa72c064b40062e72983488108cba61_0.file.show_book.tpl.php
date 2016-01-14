<?php
/* Smarty version 3.1.28, created on 2016-01-12 16:49:53
  from "/home/daniel/Projects/BookManager/smarty/templates/book/show_book.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_569520a107e8b8_64269017',
  'file_dependency' => 
  array (
    '1a2a366b0aa72c064b40062e72983488108cba61' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/book/show_book.tpl',
      1 => 1452613670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_569520a107e8b8_64269017 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_155698541569520a10271b6_65373302',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_233010445569520a102c480_11643584',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:book/show_book.tpl */
function block_155698541569520a10271b6_65373302($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'title'} */
/* {block 'body'}  file:book/show_book.tpl */
function block_233010445569520a102c480_11643584($_smarty_tpl, $_blockParentStack) {
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

<h1>Dodano książkę</h1>
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
                    <?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->title;?>
  
                    </div>
                    
                    <ul id="otherAttr">                            
                        <li>ISBN: <?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->isbn;?>
</li>
                        <li>Liczba stron: <?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->pagesNr;?>
</li>
                        <li>Cena: <?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->price;?>
 zł</li>
                        <li>Opis:</li>
                        <div class="otherInfo"><?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->description;?>
</div>                                                    
                    </ul>
                    
                </td>
                <td>
                <?php if (is_array($_smarty_tpl->tpl_vars['authors']->value) && count($_smarty_tpl->tpl_vars['authors']->value) > 0) {?>    
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
                <?php }?>
                </td>
                <td>
                <?php if (is_array($_smarty_tpl->tpl_vars['genres']->value) && count($_smarty_tpl->tpl_vars['genres']->value) > 0) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['genres']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_genre_1_saved_item = isset($_smarty_tpl->tpl_vars['genre']) ? $_smarty_tpl->tpl_vars['genre'] : false;
$__foreach_genre_1_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable();
$__foreach_genre_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_genre_1_total) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['genre']->value) {
$__foreach_genre_1_saved_local_item = $_smarty_tpl->tpl_vars['genre'];
?>
                        <?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>

                    <?php
$_smarty_tpl->tpl_vars['genre'] = $__foreach_genre_1_saved_local_item;
}
}
if ($__foreach_genre_1_saved_item) {
$_smarty_tpl->tpl_vars['genre'] = $__foreach_genre_1_saved_item;
}
if ($__foreach_genre_1_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_genre_1_saved_key;
}
?>
                <?php }?>
                </td>
            </tr>

            <form class="inputForm" action="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
author/showAuthorById" method="POST">               
                <input type="hidden" name="idAuthor" value="<?php echo $_smarty_tpl->smarty->registered_objects['book'][0]->idAuthor;?>
">
                <div class="button">
                    <button type="submit">Powrót</button>
                </div>
            </form>
    </tbody>
</table>      

<?php
}
/* {/block 'body'} */
}
