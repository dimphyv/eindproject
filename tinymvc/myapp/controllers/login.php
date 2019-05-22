<?php

session_start();

class Login_Controller extends TinyMVC_Controller{

	function checkUser(){
		var_dump($_POST);
		die();
	}
}
