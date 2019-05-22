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
}




 ?>
