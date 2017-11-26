<?php 

require_once('../config/core.php');

$smarty = new MySmarty();

$smarty->assign('name','Ned');
$smarty->assign('articles', 
		array(
			array('title'=>'x1', 'description'=>'abcd'),
			array('title'=>'x1', 'description'=>'abcd')
		));
$smarty->assign('items',array('item a', 'item b', 'item c'));

//$smarty->debugging = true; 
$smarty->display('index.tpl');
