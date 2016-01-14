<?php
/* Smarty version 3.1.28, created on 2016-01-01 17:37:17
  from "/home/daniel/Projects/BookManager/smarty/templates/layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5686ab3da6ff11_08504186',
  'file_dependency' => 
  array (
    '6e6666a4f43e81a4376947768dfcbea884ee9c15' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/layout.tpl',
      1 => 1451666223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5686ab3da6ff11_08504186 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config.conf', null, 0);
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
  
  <title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_6721940585686ab3da5d2b0_74524359',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</title>
  
  
   <link rel="stylesheet" type="text/css" 
          href= "<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
public/css/main.css">
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
public/js/jquery.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
public/js/main.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id="container">
        <h1>KSIĘGOZBIÓR</h1>
        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_15157117855686ab3da6c2e9_42125903',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    </div>
    
</body>
</html><?php }
/* {block 'title'}  file:layout.tpl */
function block_6721940585686ab3da5d2b0_74524359($_smarty_tpl, $_blockParentStack) {
?>
Default Page Title<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:layout.tpl */
function block_15157117855686ab3da6c2e9_42125903($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'body'} */
}
