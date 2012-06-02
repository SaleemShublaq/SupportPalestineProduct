<?php
	
	require "includes/functions/redirect.php";
    
     // تحقق من السيشن
    if (!isset($_SESSION['logged'])) {
        redirect('login.php');
    }
?>