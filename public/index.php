<?php 

require_once('../config/core.php');

$smarty->assign('name','Ned');
 
//$smarty->debugging = true; 
$smarty->display('index.tpl');
