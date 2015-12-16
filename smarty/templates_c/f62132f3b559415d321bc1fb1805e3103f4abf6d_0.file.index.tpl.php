<?php
/* Smarty version 3.1.28, created on 2015-12-16 14:47:28
  from "/home/daniel/Projects/BookManager/smarty/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56716b70c0cc19_07234495',
  'file_dependency' => 
  array (
    'f62132f3b559415d321bc1fb1805e3103f4abf6d' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/index.tpl',
      1 => 1450273645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56716b70c0cc19_07234495 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_136544305056716b70bf1f55_59836999',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_196928212956716b70bfc681_04238291',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:index.tpl */
function block_136544305056716b70bf1f55_59836999($_smarty_tpl, $_blockParentStack) {
?>
My Page Title<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:index.tpl */
function block_196928212956716b70bfc681_04238291($_smarty_tpl, $_blockParentStack) {
?>
My HTML Page Body goes here
    Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
    
<?php
}
/* {/block 'body'} */
}
