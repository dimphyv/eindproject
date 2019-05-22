<?php	

class Login_Controller extends TinyMVC_Controller
{
	function checkUser(){
		var_dump($_POST);
		if($_SERVER['REQUEST_METHOD']=="POST")
{
			if(isset($_POST['email']) AND isset($_POST['password']))
			{
				$email = $_POST['email'];
				$password = $_POST['password'];
				var_dump($email);
				var_dump($password);
				if(checkUser($myUsers,$email,$password))
				{
					$resultOk = 1;
					setcookie("Email",$email,time()+3600);
					setcookie("PassWord",$password,time()+3600);
					setcookie("attemps",0,time()+600);

					$_SESSION['status'] = array('OK','Email and password correct');
					relocator('welcome.php');
				}
				else {
					$_SESSION['status'] = array('failed','Wrong email or password');
					relocator('index.php');
				}

			}
		}
	}

	function 
}