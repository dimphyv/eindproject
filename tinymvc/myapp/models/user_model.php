<?php

/**
 *
 */
class User_Model extends TinyMVC_Model
{


  function get_users(){
	$result[] = null;
    $this->db->query('SELECT * FROM users');
    while($row = $this->db->next()){
      $result[]=$row;
    }
    return $result;
  }

  function seekUser($email)
  {
    $this->db->query('SELECT * FROM users WHERE email = "'.$email . '"');
    while($row = $this->db->next()){
      $result[]=$row;
    }
	if(isSet($result))
	{
	    return $result;
	}
	else {
		return [];
	}
  }

  function isPasswordMatch($email,$password)
  {
	$user = $this->seekUser($email);
	$pwMatch = FALSE;
	if(count($user) == 1)
	{
		if($user[0]["wachtwoord"] == $password)
		{
			$pwMatch = TRUE;
		}
	}
	return $pwMatch;	
  }
}

