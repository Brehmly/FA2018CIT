<?php

class RegisterController extends Controller {
public $userObject;

public function defaultTask(){

  $this->userObject = new User();
  $this->set('task', 'add');


}

public function add(){

    $this->userObject = new User();

    $data = array('firstName'=>$_POST['user_firstName'],'lastName'=>$_POST['user_lastName'],
    'email'=>$_POST['user_email'], 'password'=>$_POST['user_password']);


    $result = $this->userObject->add_User($data);

    $this->set('message', $result);


}

}
?>
