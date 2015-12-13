<?php

require_once 'setup/paths.php';

require_once 'smarty_lib/Smarty.class.php';
require_once 'setup/database.php';
require_once 'setup/Loader.php';
       
// include all files from directory ./lib  with function setup/Loader::loadLibDir 
spl_autoload_register(array('Loader', 'loadLibDir'));

$app = new Bootstrap();
//var_dump($app);
