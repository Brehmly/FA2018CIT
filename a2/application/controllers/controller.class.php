<?php
class controller {
  public $load;
  public $user;

  function __construct() {
    $this->load = new load();
    $this->user = new user();
    $this->home();
  }

  function home() {

    $this->user->userID = 'acbrehm';
    $this->user->firstName = 'Adam';
    $this->user->lastName = 'Brehm';
    $this->user->email = 'adam@brehm.com';
    $this->user->role = 'Admin';

    $data = $this->user->getName();
    $this->load->view('view.php', $data);

  }

}
 ?>
