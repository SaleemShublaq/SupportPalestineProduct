<?php
	$submit=$_POST['submit'];
	$name=$_POST['name'];
	$pass=$_POST['pass'];
		if(isset($submit)){
			
		}	
?>
<html>
<head>
<title>Insert Item</title>
</head>
	
<body>
	<center>
    <script type="text/javascript">
function test(){
if(is_nan($_POST["pric"]) !="false" && is_nan($_POST["cost"]) !="false" && is_nan($_POST["barcode"]) !="false" ){
	return true;
	}
    return false;
}
</script> 
<form action="" method="post" onSubmit="return test();" >
    	<table>
        	<tr>
            	<td>
        			<font color="#0099FF" size="+2">User Name:</font>        
                </td>
                <td>
        			<input name="name" type="text" size="35" />         
                </td>
            </tr>
            <tr>
            	<td>
        			<font color="#0099FF" size="+2">Password:</font>        
                </td>
                <td>
        			<input name="pass" type="text" />         
                </td>
            </tr>            
            </tr>
    		<tr>
            	<td colspan="2"><input type="submit" value="ADD" name="submit" /></td>
            </tr>
        	

        </table>
    </form>
    </center>
</body>
</html>