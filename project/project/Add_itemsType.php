<body>
<form id="form-container" action="controller/addItemsType.controller.php" method="post" name="formcontainer">
	
	<br/>
    <label><strong>ITEM TYPE</strong></label><br/>
    <input  id="itemtype" type="text" name="itemtype" value=""/><br/><br/>
    <input type="submit" value="SAVE" name="submit"/>
    <span><?php echo isset($_GET['result'])?$_GET['result']:''?></span>
	
</form>
</body>