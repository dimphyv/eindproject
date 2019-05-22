<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */
class Event_Model extends TinyMVC_Model
{
 //attributen van object User

 private $omschrijving;
 private $datum;
 private $geannuleerd=0;
//vraag alle evenementen op
 function get_events(){
   $this->db->query('select * from evenementen');
   while($row = $this->db->next())
     $results[] = $row;
   return $results;
 }
//voeg een event aan de database toe
 function insert_event($omschrijving, $datum, $geannuleerd){

    return $this->db->insert('users',array('datum'=>$datum,'omschrijving'=>$omschrijving,'geannuleerd'=>$geannuleerd));
 }
//vind een event, als event in de database voorkomt, return 1 else 0
 function search_event($omschrijving, $datum){
   $exists = $this->db->query('SELECT COUNT * FROM evenementen WHERE omschrijving="$omschrijving" AND datum="$datum"');
   return $exists;
 }
}















 ?>
