<?PHP
require ("{$_SERVER['DOCUMENT_ROOT']}/project/includes/mysqlProccess/opendb.php");
require_once ("{$_SERVER['DOCUMENT_ROOT']}/project/includes/functions/redirect.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/project/model/itemtype.model.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/project/includes/functions/addItemType.php");
?>
<?php
			if (isset($_POST['submit'])) {
						$type_name = $_POST['itemtype'];
						if(empty ($type_name))
							{
								redirect("../Add_itemsType.php?result=please enter all fields!");
								return;
							}	
						$Type = new itemType();
						$Type->setTypeName($type_name);
						addItemType($Type, $link);
						redirect("../Add_itemsType.php?result=type is deleted sucssessfuly!");
							}
						
?>
<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/Project/includes/mysqlProccess/closedb.php";
?>