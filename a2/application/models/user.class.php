<?php
class user extends Model{

  public function __construct() {
    //We will revisit this later
    parent::__construct();

  }

  public function __set($name,$value) {
    $this->$name = $value;
    return;
  }

  public function __get($name) {
  return $this->$name;
  }

  public function __destruct() {

  }

function getName() {
  return array (
    'userID'=>$this->$userID,
    'firstName'=>$this->$firstName,
    'lastName'=>$this->$lastName,
    'email'=>$this->$email,
    'role'=>$this->$role
  );
}
}
?>
