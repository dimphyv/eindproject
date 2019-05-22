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
    $this->view->assign('events', $events);
    $this->view->display('evenementen_view');
  }

  function test()
  {
    //$this->load->model('event_model', 'eventen');
    //$events = $this->events->get_events();
    //var_dump($events);
    //$this->view->assign('events', $events);
    //$this->view->display('events_view');
    $this->view->display('evenementen_view');
  }
}
?>
