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
  

class MySmarty extends Smarty {

   function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

		$this->setTemplateDir($_SERVER['DOCUMENT_ROOT'].'/purephpsmarty/templates/');
		$this->setCompileDir($_SERVER['DOCUMENT_ROOT'].'/purephpsmarty/templates_c/');
		$this->setConfigDir($_SERVER['DOCUMENT_ROOT'].'/purephpsmarty/config/');
		$this->setCacheDir($_SERVER['DOCUMENT_ROOT'].'/purephpsmarty/cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
   }

}    
