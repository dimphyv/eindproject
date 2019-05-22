<?php	

class Login_Controller extends TinyMVC_Controller
{
	function checkUser()
	{
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			if(isset($_POST['email']) AND isset($_POST['password']))
			{
				$email = $_POST['email'];
				$password = $_POST['password'];

				$this->load->model('user_model', 'users');
				$pwMatch = $this->users->isPasswordMatch($email,$password);
				if($pwMatch)
				{
					echo "goed, door naar het tonen van de evenementen";
					//$_SESSION['status'] = array('OK','Email and password correct');
					//relocator('welcome.php');
					header('Location: /views/evenementen_view');
				}
				else {
					echo "fout";
					header('Location: /');
				}

			}
		}
		$this->view->display('index_view');
	}

}