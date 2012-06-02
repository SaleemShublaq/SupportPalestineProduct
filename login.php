
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/html4/strict.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login Page</title>
        <link type="text/css" rel="stylesheet" href="css/main.css" />
    </head>
    <body>
                <form action="controller/login.controller.php" method="POST" width="50" height="50">
                    <span>Please Enter your Login Details</span>
                    <label for="username">Username</label>
                    <input class="textfield" id="username" name="username" type="text" /><br />
                    <label for="password">Password</label>
                    <input class="textfield" id="password" name="password" type="password" /><br />
                    
					<label><input type="radio" name="group1" value="costumer" checked="checked"/>costumer<label/>
					<label><input type="radio" name="group1" value="adminstrator"/>adminstrator<label/>
					</br>
					<input name="dologin" type="submit" value="Login" />
                    <span class="loginerror"><?php echo ($_GET['invalid'] == 1) ? 'Invalid user name and password.' : ''; ?></span>
                </form>
    </body>
</html>
