<?php
/* Smarty version 3.1.28, created on 2015-12-14 15:46:47
  from "/home/daniel/Projects/BookManager/smarty/templates/layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_566ed6570ffa32_00063198',
  'file_dependency' => 
  array (
    '6e6666a4f43e81a4376947768dfcbea884ee9c15' => 
    array (
      0 => '/home/daniel/Projects/BookManager/smarty/templates/layout.tpl',
      1 => 1450104405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_566ed6570ffa32_00063198 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config.conf', null, 0);
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
  
  <title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_1080209074566ed6570f3130_76171345',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</title>
  
  
   <link rel="stylesheet" type="text/css" 
          href= "<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'APPLICATION_PATH');?>
public/css/main.css">
</head>
<body>
    <div id="container">
        <h1>KSIĘGOZBIÓR</h1>
        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_1942444527566ed6570fbe39_01169838',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    </div>
</body>
</html><?php }
/* {block 'title'}  file:layout.tpl */
function block_1080209074566ed6570f3130_76171345($_smarty_tpl, $_blockParentStack) {
?>
Default Page Title<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:layout.tpl */
function block_1942444527566ed6570fbe39_01169838($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'body'} */
}
