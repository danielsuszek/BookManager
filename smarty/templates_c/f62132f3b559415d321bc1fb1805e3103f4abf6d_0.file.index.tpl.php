<?php
/* Smarty version 3.1.28, created on 2015-12-13 17:24:13
  from "/home/daniel/Projects/BookManager/smarty/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_566d9bad45c302_74076076',
  'file_dependency' => 
  array (
    'f62132f3b559415d321bc1fb1805e3103f4abf6d' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/index.tpl',
      1 => 1450023849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_566d9bad45c302_74076076 ($_smarty_tpl) {
?>
<html>
  <head>
    <title>Smarty</title>
  </head>
  <body>
    Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
    <?php echo $_smarty_tpl->smarty->registered_objects['ksiazka'][0]->tytul;?>

    <?php echo $_smarty_tpl->smarty->registered_objects['ksiazka'][0]->opis;?>

    
  </body>
</html><?php }
}
