<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */


class Events_Controller extends TinyMVC_Controller
{
  function index()
  {
    $this->load->model('event_model', 'events');
    $events = $this->events->get_events();

  //$this->view->assign('body_text', $events);

    $this->view->display('evenementen_view', $events);
  }

  function test()
  {
    $this->load->model('event_model', 'eventen');
    $events = $this->eventen->get_events();
    var_dump($events);
    //foreach ($events as $value) {
      //$counter = 0;
      //$data[$counter]=$value;
      //$data['event_id']=$value['evenement_id']."<br>";
      //$data['datum']=$value['datum']."<br>";
      //echo $value['omschrijving']."<br>";
      //echo $value['geannuleerd']."<br>";

      //echo $key."and".$value."<br>";
      //$counter++;
}
      //$this->view->display('evenementen_view', $events);

    //$this->view->assign('events', $events);
    //$this->view->display('events_view');
    //$this->view->display('evenementen_view');
}
