<?php

class MembersController extends Controller{

	public $userObject;

   	public function users($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);
	  	$this->set('user',$user);
   	}

	public function index(){
		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
	}

	public function update(){
		$this->userObject = new Users();
		$password = $_POST['password'];

		//if pass is not empty it will insert a new passhash password if it is empty it will not insert a password to database so it keeps original
		if(!empty($password)){
			$passhash = password_hash($password,PASSWORD_DEFAULT);
			$data = array('uID'=>$this->userObject->getUserFromID($uID),'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'], 'password'=>$passhash);
			$this->postObject->editUserWithPassword($data);
			}else{
				$data = array('uID'=>$this->userObject->getUserFromID($uID),'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email']);
				$this->userObject->editUser($data);
			}
			$this->set('message','password set');
			$this->index();
}

}

?>
