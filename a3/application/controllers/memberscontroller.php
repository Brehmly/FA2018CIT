<?php

class MembersController extends Controller {

  public $members;

  public function view($uID){
    $this->members = new User();
    $user = $this->members->getUser($uID);
    $this->set('users', $user);
  }

  public function defaultTast(){
    $this->members = new User();
    $users = $this->members->getAllUsers();
    $this->set('users', $users);
  }
}

?>
