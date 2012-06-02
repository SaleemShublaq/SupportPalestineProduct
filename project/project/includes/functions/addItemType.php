<?php
	
	function addItemType($Type, $link){
		$query = sprintf("INSERT INTO item_type (TypeName) VALUES ('%s')",
				 $Type->getTypeName());
		mysql_query($query, $link); 
		
		
    }
?>