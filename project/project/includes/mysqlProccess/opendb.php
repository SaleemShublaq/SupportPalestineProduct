<?php //اتصال بالداتا بيز
	$localhost='localhost';
	$user='root';
	$pass='123456';
	$database='spp_db';
	try{
    $link = mysql_connect($localhost,$user,$pass);
	
	if ( $link ) echo 'connected';
    if(!$link){
        die('Error in database connection');
    }
	}
	catch(Exception $e){
	echo 'errrrrrror'.$e;
	}
	
	
	if ( mysql_select_db($database,$link) )
		echo 'selected';
	else
		echo 'not selected';