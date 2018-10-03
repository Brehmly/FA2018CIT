<?php
abstract class Model {
  protected $userID;
  protected $firstName;
  protected $lastName;
  protected $email;
  protected $role;


  public function __construct() {
    //We will revisit this later

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
  }
//function getName() {
//  return array (
//    'first'=>'Adam',
//    'last'=>'Brehm'
//  );



?>
