<?php
class user_1 extends user{

public function __construct($user_level, $user_id) {
  parent::__construct($user_level);
  $this->user_level = $user_level;
  $this->user_id=$user_id;
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
?>
