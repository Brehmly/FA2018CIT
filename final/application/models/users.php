<?php
class Users extends Model{

	public $uID;
	public $first_name;
	public $last_name;
	public $email;
	protected $user_type;
	// Constructor
	public function __construct(){
		parent::__construct();
			if(isset($_SESSION['uID'])){
				$userInfo = $this->getUserFromID($_SESSION['uID']);
				$this->uID = $userInfo['uID'];
				$this->first_name = $userInfo['first_name'];
				$this->last_name = $userInfo['last_name'];
				$this->email = $userInfo['email'];
				$this->user_type = $userInfo['user_type'];
		}
		}

	public function getUserName(){
		return $this->first_name . ' ' . $this->last_name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function isAdmin(){
		if($this->user_type == '1') {
			return true;
		} else {
			return false;
		}
	}

	public function isRegistered(){
		if(isset($this->user_type)){
			return true;
		} else {
			return false;
		}
	}

	public function checkUser($email, $password){
		$sql = 'SELECT email, password FROM users WHERE email = ?';
		$results = $this->db->getrow($sql, array($email));
		$user = $results;
		return $user;
	}

	public function getUserFromEmail($email){
		$sql = 'SELECT * FROM users WHERE email = ?';
		$results = $this->db->getrow($sql, array($email));
		$user = $results;
		return $user;
	}

	public function getUserFromID($uID){
		$sql = 'SELECT * FROM users WHERE uID = ?';
		$results = $this->db->getrow($sql, array($uID));
		$user = $results;
		return $user;
	}

	public function getUser($uID){
		$sql = 'SELECT uID, first_name, last_name, email, password, active FROM users WHERE uID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($uID));
		$user = $results;
		return $user;
	}

	public function getAllUsers($limit = 0){
		if($limit > 0){
			$numusers = ' LIMIT '.$limit;
		}
		$sql = 'SELECT uID, first_name, last_name, email, password, active, user_type FROM users'.$numusers;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;
	}

	//Correct addUser method

	public function addUser($data){
		$sql = 'INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
	}

	public function editUser($data){
		$sql='INSERT INTO users (email,first_name,last_name) VALUES (?,?,?)';
		$this->db->execute($sql,$data);
			$message = 'User updated.';
			return $message;
	}

	public function editUserWithPassword($data){
		$sql = "UPDATE users SET email = ?, first_name = ?, last_name = ?, password = ? where uID = ?";
		$this->db->execute($sql, array($data['email'],$data['first_name'],$data['last_name'],$data['password'],$data['uID']));
			$message = 'User updated.';
			return $message;
	}
	public function isActive($uID){
			$sql='Select active from users WHERE uID = ?';
			$results = $this->db->getrow($sql, array($uID));
			//Pre-init
			$result = false;
			if($results['active'] == 0){
					$result = false;
			} else {
					$result = true;
				}
			return $result;

	}

	public function activateUser($uID){
			$sql = 'UPDATE users SET active = 1 where uID = ?';
			$this->db->execute($sql,array($uID));
			$message = "User Approved";
			return $message;
	}
	public function deleteUser($uID){
			$sql = 'DELETE FROM users where uID = ?';
			$this->db->execute($sql,array($uID));
			$message = "User Deleted";
			return $message;
	}


}
?>
