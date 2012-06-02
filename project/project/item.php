<?php
	$submit=$_POST['submit'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$cost=$_POST['cost'];
	$barcode=$_POST['barcode'];
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
<form action="" method="post" onsubmit="return test();" >
    	<table>
        	<tr>
            	<td>
        			<font color="#0099FF" size="+2">Item Name:</font>        
                </td>
                <td>
        			<input name="name" type="text" size="35" />         
                </td>
            </tr>
            <tr>
            	<td>
        			<font color="#0099FF" size="+2">Item Price:</font>        
                </td>
                <td>
        			<input name="price" type="text" />         
                </td>
            </tr>
            <tr>
            	<td>
        			<font color="#0099FF" size="+2">Item Cost:</font>        
                </td>
                <td>
        			<input name="cost" type="text" />         
                </td>
            </tr>
            <tr>
            	<td>
        			<font color="#0099FF" size="+2">Item Barcode:</font>        
                </td>
                <td>
        			<input name="barcode" type="text" />         
                </td>
            </tr>
    		<tr>
            	<td colspan="2"><input type="submit" value="ADD" name="submit" /></td>
            </tr>
        	

        </table>
    </form>
    </center>
</body>
</html>