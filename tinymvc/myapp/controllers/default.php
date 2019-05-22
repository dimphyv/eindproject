<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Default_Controller extends TinyMVC_Controller
{
  function index()
  {
    $this->load->model('user_model', 'users');
    $users = $this->users->get_users();

    $this->view->assign('users', $users);

    $this->view->display('index_view');
  }
}
