<?php
define("APPPATH", "http://localhost/purephpsmarty");
define("PHPLIB_PATH", '/libraries');
define("CONFIG_PATH", '/config');
define("INTERFACES_PATH", '/interfaces');
define("OBJECTS_PATH", '/objects');
define("PUBLIC_PATH", '/public');
define("ASSETS_PATH", '/public/assets');

//initiate smarty
require_once('../'.PHPLIB_PATH.'/smarty-3.1.30/libs/Smarty.class.php');
  
$smarty = new Smarty();
$smarty->setTemplateDir($_SERVER['DOCUMENT_ROOT'].'/purephpsmarty/templates/');
$smarty->setCompileDir($_SERVER['DOCUMENT_ROOT'].'/www/purephpsmarty/templates_c/');
$smarty->setConfigDir($_SERVER['DOCUMENT_ROOT'].'/www/purephpsmarty/config/');
$smarty->setCacheDir($_SERVER['DOCUMENT_ROOT'].'/purephpsmarty/cache/');

$smarty->caching = 0;       
