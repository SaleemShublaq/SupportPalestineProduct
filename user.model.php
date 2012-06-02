<?php
    class User{
        private $username;
        private $password;
        public function __construct(){
        }
        public function setUserName($username){
            $this->username= $username;
        }
        public function getUserName(){
            return $this->username;
        }
		public function setUserPassword($password){
            $this->password= $password;
        }
        public function getUserPassword(){
            return $this->password;
        }
    }
    /*********************************************************************************************************/
function authenticateadmin($userName,$password,$link){
    $query = sprintf("SELECT ID FROM users WHERE UserName ='%s' AND password ='%s'"
            ,trim($userName)
            ,SHA1(trim($password)));

    $result = mysql_query($query, $link);
    if(mysql_num_rows($result) == 0){
        return false;
    }
    else{
       $row = mysql_fetch_array($result);
                return true;
        }
    }
	/*********************************************************************************************************/	
function authenticatecostumer($userName,$password,$link){
    $query = sprintf("SELECT ID FROM customers WHERE UserName ='%s' AND password ='%s'"
            ,trim($userName)
            ,SHA1(trim($password)));

    $result = mysql_query($query, $link);
    if(mysql_num_rows($result) == 0){
        return false;
    }
    else{
       $row = mysql_fetch_array($result);
                return true;
        }
    }
    /*********************************************************************************************************/
?>
