<?php

class User extends Model {

  public function getAllUsers($limit = 0){
    if($limit > 0){
      $numposts = 'LIMIT' . $limit;
    }
    $sql = 'SELECT uID, email, password, first_name, last_name FROM users' . $numposts;
    $results = $this->db->execute($sql);
    while($row=$results->fetchrow()){
      $users[] = $row;
    }
    return $users;
  }
  function getUser($uID){
    $sql = 'SELECT uID, email, password, first_name, last_name FROM users WHERE uID = ?';
    $results = $this->db->getrow($sql, array($uID));
    $user = $results;
    return $user;
  }
  public function add_User($data){

    $sql = 'INSERT INTO users (email, first_name, last_name, password) VALUES (?, ?, ?, ?)';
    $this->db->execute($sql, $data);
    $message = 'User successfully added';
    return $message;
  }
}

?>
