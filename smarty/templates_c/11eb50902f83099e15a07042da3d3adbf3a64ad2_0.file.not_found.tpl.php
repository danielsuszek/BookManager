<?php
/* Smarty version 3.1.28, created on 2016-01-08 15:34:42
  from "/home/daniel/Projects/BookManager/smarty/templates/not_found.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_568fc902bd2606_00801508',
  'file_dependency' => 
  array (
    '11eb50902f83099e15a07042da3d3adbf3a64ad2' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/not_found.tpl',
      1 => 1452263582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_568fc902bd2606_00801508 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_651706876568fc902bbf809_24300486',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_1926178507568fc902bc4694_53959744',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:not_found.tpl */
function block_651706876568fc902bbf809_24300486($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'title'} */
/* {block 'body'}  file:not_found.tpl */
function block_1926178507568fc902bc4694_53959744($_smarty_tpl, $_blockParentStack) {
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
    <h5><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h5>

<?php
}
/* {/block 'body'} */
}
