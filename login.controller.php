<?php
    session_start();
	
    include('../includes/mysqlProccess/opendb.php');
    include('../model/user.model.php');
	include('../model/functions/authenticateUser.php');
	include('../model/functions/getUserModel.php');
	include('../includes/functions/redirect.php');
	$isAuthenticAdmin=false;
	$isAuthenticCustomer=false;
		if (isset($_POST['dologin'])){ 
			$userName =$_POST['username'];
			$password =$_POST['password'];
			$userTyp=$_POST['group1'];
			if($type=='costumer'){
				$isAuthenticAdmin = authenticateUser($userName,$password,$link);
				$_SESSION['logged']='logged';
					$userModel = getUserModel($userName,$link);
					$_SESSION['userModel']=$userModel;
					$_SESSION['userNo']=$userModel->getUserId();
					redirect("../adminstrator.php");
					return;
			}elseif($type=='adminstrator'){
				$isAuthenticCustomer = authenticateUser($userName,$password,$link);
				$_SESSION['logged']='logged';
					$userModel = getUserModel($userName,$link);
					$_SESSION['userModel']=$userModel;
					$_SESSION['userNo']=$userModel->getUserId();
					redirect("../costumer.php");
					return;
			}else{
					redirect("../login.php?invalid=1");
					return;	
				} 
		}
	require_once ("../includes/mysqlProccess/closedb.php");
?>