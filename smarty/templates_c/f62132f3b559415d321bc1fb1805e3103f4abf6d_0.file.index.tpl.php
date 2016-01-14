<?php
/* Smarty version 3.1.28, created on 2016-01-12 19:19:50
  from "/home/daniel/Projects/BookManager/smarty/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_569543c6da21f8_23042747',
  'file_dependency' => 
  array (
    'f62132f3b559415d321bc1fb1805e3103f4abf6d' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/index.tpl',
      1 => 1452622784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_569543c6da21f8_23042747 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_1244611311569543c6c809b9_52272844',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_2120970178569543c6c88182_72960471',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:index.tpl */
function block_1244611311569543c6c809b9_52272844($_smarty_tpl, $_blockParentStack) {
?>
My Page Title<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:index.tpl */
function block_2120970178569543c6c88182_72960471($_smarty_tpl, $_blockParentStack) {
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
<?php if (is_array($_smarty_tpl->tpl_vars['authors']->value) && count($_smarty_tpl->tpl_vars['authors']->value) > 0) {?>
<table id="books-list">
        <col class="author">
        <col class="book">
        <col class="genre">
        <thead>
        <td>Autor</td><td>Książka</td><td>Gatunek</td>
        </thead>
        <tbody> 
            <tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['authors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_author_0_saved_item = isset($_smarty_tpl->tpl_vars['author']) ? $_smarty_tpl->tpl_vars['author'] : false;
$__foreach_author_0_saved_key = isset($_smarty_tpl->tpl_vars['idAuthor']) ? $_smarty_tpl->tpl_vars['idAuthor'] : false;
$_smarty_tpl->tpl_vars['author'] = new Smarty_Variable();
$__foreach_author_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_author_0_total) {
$_smarty_tpl->tpl_vars['idAuthor'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['idAuthor']->value => $_smarty_tpl->tpl_vars['author']->value) {
$__foreach_author_0_saved_local_item = $_smarty_tpl->tpl_vars['author'];
?>                            
                
                
                <?php
$_from = $_smarty_tpl->tpl_vars['authors']->value[$_smarty_tpl->tpl_vars['idAuthor']->value]['books'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_books_1_saved_item = isset($_smarty_tpl->tpl_vars['books']) ? $_smarty_tpl->tpl_vars['books'] : false;
$__foreach_books_1_saved_key = isset($_smarty_tpl->tpl_vars['idBook']) ? $_smarty_tpl->tpl_vars['idBook'] : false;
$_smarty_tpl->tpl_vars['books'] = new Smarty_Variable();
$__foreach_books_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_books_1_total) {
$_smarty_tpl->tpl_vars['idBook'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['idBook']->value => $_smarty_tpl->tpl_vars['books']->value) {
$__foreach_books_1_saved_local_item = $_smarty_tpl->tpl_vars['books'];
?>      
                <tr>
                    <td>
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
                        
                            <a class="button" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
book/newBook?idAuthor=<?php echo $_smarty_tpl->tpl_vars['author']->value['idAuthor'];?>
"><button>Dodaj książkę</button></a>
                    </td>
                    <td>                                                                    
                        <div class="book">
                        <?php echo $_smarty_tpl->tpl_vars['books']->value['title'];?>
            
                        </div>
                        
                        <ul id="otherAttr">                            
                            <li>ISBN: <?php echo $_smarty_tpl->tpl_vars['books']->value['isbn'];?>
</li>
                            <li>Liczba stron: <?php echo $_smarty_tpl->tpl_vars['books']->value['pagesNr'];?>
</li>
                            <li>Cena: <?php echo $_smarty_tpl->tpl_vars['books']->value['price'];?>
 zł</li>
                            <li>Cena netto: <?php echo $_smarty_tpl->tpl_vars['books']->value['priceNetto'];?>
 zł</li>
                            <li>Opis:</li>
                            <div class="otherInfo"><?php echo $_smarty_tpl->tpl_vars['books']->value['description'];?>
</div>                            
                            <?php
$_from = $_smarty_tpl->tpl_vars['authors']->value[$_smarty_tpl->tpl_vars['idAuthor']->value]['books'][$_smarty_tpl->tpl_vars['idBook']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_bookAttr_2_saved_item = isset($_smarty_tpl->tpl_vars['bookAttr']) ? $_smarty_tpl->tpl_vars['bookAttr'] : false;
$__foreach_bookAttr_2_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['bookAttr'] = new Smarty_Variable();
$__foreach_bookAttr_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_bookAttr_2_total) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['bookAttr']->value) {
$__foreach_bookAttr_2_saved_local_item = $_smarty_tpl->tpl_vars['bookAttr'];
?>                                
                            <?php if ($_smarty_tpl->tpl_vars['i']->value == 'otherAuthors') {?>                                                          
                                <?php
$_from = $_smarty_tpl->tpl_vars['authors']->value[$_smarty_tpl->tpl_vars['idAuthor']->value]['books'][$_smarty_tpl->tpl_vars['idBook']->value]['otherAuthors'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_otherAuthors_3_saved_item = isset($_smarty_tpl->tpl_vars['otherAuthors']) ? $_smarty_tpl->tpl_vars['otherAuthors'] : false;
$__foreach_otherAuthors_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['otherAuthors'] = new Smarty_Variable();
$__foreach_otherAuthors_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_otherAuthors_3_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['otherAuthors']->value) {
$__foreach_otherAuthors_3_saved_local_item = $_smarty_tpl->tpl_vars['otherAuthors'];
?>
                                <li>Współautor:</li>
                                <ul id="otherAttr"><li><?php echo $_smarty_tpl->tpl_vars['otherAuthors']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['otherAuthors']->value['surname'];?>
<li></ul>
                                <?php
$_smarty_tpl->tpl_vars['otherAuthors'] = $__foreach_otherAuthors_3_saved_local_item;
}
}
if ($__foreach_otherAuthors_3_saved_item) {
$_smarty_tpl->tpl_vars['otherAuthors'] = $__foreach_otherAuthors_3_saved_item;
}
if ($__foreach_otherAuthors_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_otherAuthors_3_saved_key;
}
?>    
                            <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['bookAttr'] = $__foreach_bookAttr_2_saved_local_item;
}
}
if ($__foreach_bookAttr_2_saved_item) {
$_smarty_tpl->tpl_vars['bookAttr'] = $__foreach_bookAttr_2_saved_item;
}
if ($__foreach_bookAttr_2_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_bookAttr_2_saved_key;
}
?>  
                        </ul>
                        
                        <a class="button delete" 
                   href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
book/showBook?idBook=<?php echo $_smarty_tpl->tpl_vars['books']->value['idBook'];?>
&idAuthor=<?php echo $_smarty_tpl->tpl_vars['author']->value['idAuthor'];?>
&surnameAuthor=<?php echo $_smarty_tpl->tpl_vars['author']->value['surname'];?>
&forFormDelete=true">
                            <button>Usuń książkę</button></a>
                        <a class="button" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
book/showEditBook?idBook=<?php echo $_smarty_tpl->tpl_vars['books']->value['idBook'];?>
&idAuthor=<?php echo $_smarty_tpl->tpl_vars['author']->value['idAuthor'];?>
">
                            <button>Edytuj książkę</button></a>                        
                    </td>                    
                    <td>
                        <?php
$_from = $_smarty_tpl->tpl_vars['authors']->value[$_smarty_tpl->tpl_vars['idAuthor']->value]['books'][$_smarty_tpl->tpl_vars['idBook']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_bookAttr_4_saved_item = isset($_smarty_tpl->tpl_vars['bookAttr']) ? $_smarty_tpl->tpl_vars['bookAttr'] : false;
$__foreach_bookAttr_4_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['bookAttr'] = new Smarty_Variable();
$__foreach_bookAttr_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_bookAttr_4_total) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['bookAttr']->value) {
$__foreach_bookAttr_4_saved_local_item = $_smarty_tpl->tpl_vars['bookAttr'];
?>                                
                            <?php if ($_smarty_tpl->tpl_vars['i']->value == 'genres') {?>                                
                                <?php
$_from = $_smarty_tpl->tpl_vars['authors']->value[$_smarty_tpl->tpl_vars['idAuthor']->value]['books'][$_smarty_tpl->tpl_vars['idBook']->value]['genres'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_genre_5_saved_item = isset($_smarty_tpl->tpl_vars['genre']) ? $_smarty_tpl->tpl_vars['genre'] : false;
$__foreach_genre_5_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable();
$__foreach_genre_5_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_genre_5_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['genre']->value) {
$__foreach_genre_5_saved_local_item = $_smarty_tpl->tpl_vars['genre'];
?>
                                    <?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>

                                <?php
$_smarty_tpl->tpl_vars['genre'] = $__foreach_genre_5_saved_local_item;
}
}
if ($__foreach_genre_5_saved_item) {
$_smarty_tpl->tpl_vars['genre'] = $__foreach_genre_5_saved_item;
}
if ($__foreach_genre_5_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_genre_5_saved_key;
}
?>    
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['bookAttr'] = $__foreach_bookAttr_4_saved_local_item;
}
}
if ($__foreach_bookAttr_4_saved_item) {
$_smarty_tpl->tpl_vars['bookAttr'] = $__foreach_bookAttr_4_saved_item;
}
if ($__foreach_bookAttr_4_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_bookAttr_4_saved_key;
}
?>  
                    </td> 
                </tr>
                <?php
$_smarty_tpl->tpl_vars['books'] = $__foreach_books_1_saved_local_item;
}
}
if ($__foreach_books_1_saved_item) {
$_smarty_tpl->tpl_vars['books'] = $__foreach_books_1_saved_item;
}
if ($__foreach_books_1_saved_key) {
$_smarty_tpl->tpl_vars['idBook'] = $__foreach_books_1_saved_key;
}
?>
            
            <?php
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_0_saved_local_item;
}
}
if ($__foreach_author_0_saved_item) {
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_0_saved_item;
}
if ($__foreach_author_0_saved_key) {
$_smarty_tpl->tpl_vars['idAuthor'] = $__foreach_author_0_saved_key;
}
?>    
            </tr>
        </tbody>
</table>    
<?php }?>   
<?php if (is_array($_smarty_tpl->tpl_vars['books']->value) && count($_smarty_tpl->tpl_vars['books']->value) > 0) {?>
<table id="books-list">
        <col class="author">
        <col class="book">
        <col class="genre">
        <thead>
        <td>Książka</td><td>Autor</td><td>Gatunek</td>
        </thead>
        <tbody>     
            <tr>    
            <?php
$_from = $_smarty_tpl->tpl_vars['books']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_book_6_saved_item = isset($_smarty_tpl->tpl_vars['book']) ? $_smarty_tpl->tpl_vars['book'] : false;
$__foreach_book_6_saved_key = isset($_smarty_tpl->tpl_vars['idBook']) ? $_smarty_tpl->tpl_vars['idBook'] : false;
$_smarty_tpl->tpl_vars['book'] = new Smarty_Variable();
$__foreach_book_6_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_book_6_total) {
$_smarty_tpl->tpl_vars['idBook'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['idBook']->value => $_smarty_tpl->tpl_vars['book']->value) {
$__foreach_book_6_saved_local_item = $_smarty_tpl->tpl_vars['book'];
?>
            <tr>
                <td>
                    <div class="book">
                    <?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
            
                    </div>

                    <ul id="otherAttr">                            
                        <li>ISBN: <?php echo $_smarty_tpl->tpl_vars['book']->value['isbn'];?>
</li>
                        <li>Liczba stron: <?php echo $_smarty_tpl->tpl_vars['book']->value['pagesNr'];?>
</li>
                        <li>Cena: <?php echo $_smarty_tpl->tpl_vars['book']->value['price'];?>
 zł</li>
                        <li>Cena netto: <?php echo $_smarty_tpl->tpl_vars['book']->value['priceNetto'];?>
 zł</li>
                        <li>Opis:</li>
                        <div class="otherInfo"><?php echo $_smarty_tpl->tpl_vars['book']->value['description'];?>
</div>                                                    
                    </ul>
                </td>
                <td>
                <?php
$_from = $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['idBook']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_7_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_7_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_7_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_7_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_7_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['k']->value == 'authors') {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['idBook']->value][$_smarty_tpl->tpl_vars['k']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_author_8_saved_item = isset($_smarty_tpl->tpl_vars['author']) ? $_smarty_tpl->tpl_vars['author'] : false;
$__foreach_author_8_saved_key = isset($_smarty_tpl->tpl_vars['l']) ? $_smarty_tpl->tpl_vars['l'] : false;
$_smarty_tpl->tpl_vars['author'] = new Smarty_Variable();
$__foreach_author_8_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_author_8_total) {
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value => $_smarty_tpl->tpl_vars['author']->value) {
$__foreach_author_8_saved_local_item = $_smarty_tpl->tpl_vars['author'];
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
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_8_saved_local_item;
}
}
if ($__foreach_author_8_saved_item) {
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_8_saved_item;
}
if ($__foreach_author_8_saved_key) {
$_smarty_tpl->tpl_vars['l'] = $__foreach_author_8_saved_key;
}
?>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_7_saved_local_item;
}
}
if ($__foreach_item_7_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_7_saved_item;
}
if ($__foreach_item_7_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_item_7_saved_key;
}
?>    
                <a class="button" href="#">Dodaj książkę</a>
                </td>
                <td>
                <?php
$_from = $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['idBook']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_9_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_9_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_9_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_9_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_9_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['k']->value == 'genres') {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->tpl_vars['idBook']->value][$_smarty_tpl->tpl_vars['k']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_genre_10_saved_item = isset($_smarty_tpl->tpl_vars['genre']) ? $_smarty_tpl->tpl_vars['genre'] : false;
$__foreach_genre_10_saved_key = isset($_smarty_tpl->tpl_vars['l']) ? $_smarty_tpl->tpl_vars['l'] : false;
$_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable();
$__foreach_genre_10_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_genre_10_total) {
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value => $_smarty_tpl->tpl_vars['genre']->value) {
$__foreach_genre_10_saved_local_item = $_smarty_tpl->tpl_vars['genre'];
?>
                            <?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>

                        <?php
$_smarty_tpl->tpl_vars['genre'] = $__foreach_genre_10_saved_local_item;
}
}
if ($__foreach_genre_10_saved_item) {
$_smarty_tpl->tpl_vars['genre'] = $__foreach_genre_10_saved_item;
}
if ($__foreach_genre_10_saved_key) {
$_smarty_tpl->tpl_vars['l'] = $__foreach_genre_10_saved_key;
}
?>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_9_saved_local_item;
}
}
if ($__foreach_item_9_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_9_saved_item;
}
if ($__foreach_item_9_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_item_9_saved_key;
}
?>  
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['book'] = $__foreach_book_6_saved_local_item;
}
}
if ($__foreach_book_6_saved_item) {
$_smarty_tpl->tpl_vars['book'] = $__foreach_book_6_saved_item;
}
if ($__foreach_book_6_saved_key) {
$_smarty_tpl->tpl_vars['idBook'] = $__foreach_book_6_saved_key;
}
?>    
            </tr>
    </tbody>
</table>      
<?php }?>    
<?php
}
/* {/block 'body'} */
}
