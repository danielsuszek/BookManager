<?php
/* Smarty version 3.1.28, created on 2015-12-25 20:44:36
  from "/home/daniel/Projects/BookManager/smarty/templates/test2.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_567d9ca40ab7a8_88563187',
  'file_dependency' => 
  array (
    '2134b73fae7259d4ef629d80464a7805333c9b6c' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/test2.tpl',
      1 => 1451072673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_567d9ca40ab7a8_88563187 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_1055043420567d9ca402a417_73353543',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_469834174567d9ca402f851_06685078',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:test2.tpl */
function block_1055043420567d9ca402a417_73353543($_smarty_tpl, $_blockParentStack) {
?>
My Page Title<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:test2.tpl */
function block_469834174567d9ca402f851_06685078($_smarty_tpl, $_blockParentStack) {
?>
    
<form id="find-author" action="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
index/findAuthorByName" method="POST" accept-charset="ISO-8859-2">    
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
        
            
        <?php
$_from = $_smarty_tpl->tpl_vars['booksArr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_bookitem_0_saved_item = isset($_smarty_tpl->tpl_vars['bookitem']) ? $_smarty_tpl->tpl_vars['bookitem'] : false;
$__foreach_bookitem_0_saved_key = isset($_smarty_tpl->tpl_vars['idbook']) ? $_smarty_tpl->tpl_vars['idbook'] : false;
$_smarty_tpl->tpl_vars['bookitem'] = new Smarty_Variable();
$__foreach_bookitem_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_bookitem_0_total) {
$_smarty_tpl->tpl_vars['idbook'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['idbook']->value => $_smarty_tpl->tpl_vars['bookitem']->value) {
$__foreach_bookitem_0_saved_local_item = $_smarty_tpl->tpl_vars['bookitem'];
?>  
        <tr>
            <td>
                <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->name;?>
 <?php echo $_smarty_tpl->smarty->registered_objects['author'][0]->surname;?>

            </td>       
            <td>
                <h3><?php echo $_smarty_tpl->tpl_vars['booksArr']->value[$_smarty_tpl->tpl_vars['idbook']->value]['title'];?>
</h3>

                <div class="bookAttr">ISBN: <?php echo $_smarty_tpl->tpl_vars['booksArr']->value[$_smarty_tpl->tpl_vars['idbook']->value]['isbn'];?>
</div>    
                <div class="bookAttr">Opis: <?php echo $_smarty_tpl->tpl_vars['booksArr']->value[$_smarty_tpl->tpl_vars['idbook']->value]['description'];?>
</div>
                <div class="bookAttr">id: <?php echo $_smarty_tpl->tpl_vars['idbook']->value;?>
</div>
                <?php if (count($_smarty_tpl->tpl_vars['booksArr']->value[$_smarty_tpl->tpl_vars['idbook']->value]['otherAuthors']) > 0) {?>                                                
                Pozostali autorzy:    
                    <ul id="otherAttr">
                    <?php
$_from = $_smarty_tpl->tpl_vars['booksArr']->value[$_smarty_tpl->tpl_vars['idbook']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_inner_1_saved_item = isset($_smarty_tpl->tpl_vars['inner']) ? $_smarty_tpl->tpl_vars['inner'] : false;
$__foreach_inner_1_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['inner'] = new Smarty_Variable();
$__foreach_inner_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_inner_1_total) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['inner']->value) {
$__foreach_inner_1_saved_local_item = $_smarty_tpl->tpl_vars['inner'];
?>
                       <?php if ($_smarty_tpl->tpl_vars['i']->value == 'otherAuthors') {?>
                          <?php
$_from = $_smarty_tpl->tpl_vars['booksArr']->value[$_smarty_tpl->tpl_vars['idbook']->value]['otherAuthors'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_other_2_saved_item = isset($_smarty_tpl->tpl_vars['other']) ? $_smarty_tpl->tpl_vars['other'] : false;
$_smarty_tpl->tpl_vars['other'] = new Smarty_Variable();
$__foreach_other_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_other_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['other']->value) {
$__foreach_other_2_saved_local_item = $_smarty_tpl->tpl_vars['other'];
?>
                              <li><?php echo $_smarty_tpl->tpl_vars['other']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['other']->value['surname'];?>
</li>
                          <?php
$_smarty_tpl->tpl_vars['other'] = $__foreach_other_2_saved_local_item;
}
}
if ($__foreach_other_2_saved_item) {
$_smarty_tpl->tpl_vars['other'] = $__foreach_other_2_saved_item;
}
?>
                       <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['inner'] = $__foreach_inner_1_saved_local_item;
}
}
if ($__foreach_inner_1_saved_item) {
$_smarty_tpl->tpl_vars['inner'] = $__foreach_inner_1_saved_item;
}
if ($__foreach_inner_1_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_inner_1_saved_key;
}
?>
                    </ul>
                <?php }?>
            </td>
            <td>
                <?php
$_from = $_smarty_tpl->tpl_vars['booksArr']->value[$_smarty_tpl->tpl_vars['idbook']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_inner_3_saved_item = isset($_smarty_tpl->tpl_vars['inner']) ? $_smarty_tpl->tpl_vars['inner'] : false;
$__foreach_inner_3_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['inner'] = new Smarty_Variable();
$__foreach_inner_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_inner_3_total) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['inner']->value) {
$__foreach_inner_3_saved_local_item = $_smarty_tpl->tpl_vars['inner'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value == 'genres') {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['booksArr']->value[$_smarty_tpl->tpl_vars['idbook']->value]['genres'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_genre_4_saved_item = isset($_smarty_tpl->tpl_vars['genre']) ? $_smarty_tpl->tpl_vars['genre'] : false;
$_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable();
$__foreach_genre_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_genre_4_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$__foreach_genre_4_saved_local_item = $_smarty_tpl->tpl_vars['genre'];
?>
                            <p><?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>
</p>
                        <?php
$_smarty_tpl->tpl_vars['genre'] = $__foreach_genre_4_saved_local_item;
}
}
if ($__foreach_genre_4_saved_item) {
$_smarty_tpl->tpl_vars['genre'] = $__foreach_genre_4_saved_item;
}
?>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['inner'] = $__foreach_inner_3_saved_local_item;
}
}
if ($__foreach_inner_3_saved_item) {
$_smarty_tpl->tpl_vars['inner'] = $__foreach_inner_3_saved_item;
}
if ($__foreach_inner_3_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_inner_3_saved_key;
}
?>    
            </td>                
        </tr>
        <?php
$_smarty_tpl->tpl_vars['bookitem'] = $__foreach_bookitem_0_saved_local_item;
}
}
if ($__foreach_bookitem_0_saved_item) {
$_smarty_tpl->tpl_vars['bookitem'] = $__foreach_bookitem_0_saved_item;
}
if ($__foreach_bookitem_0_saved_key) {
$_smarty_tpl->tpl_vars['idbook'] = $__foreach_bookitem_0_saved_key;
}
?>      
            
    </tbody>
    
</table>
<?php
}
/* {/block 'body'} */
}
