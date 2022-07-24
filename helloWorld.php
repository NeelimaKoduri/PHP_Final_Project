<?php 

class subject{
	protected $username;
	protected $password;
	
	public function setUsername($user){
		$this->username=$user;
	}
	public function getUsername(){
		return $this->username;
	}
	public function setPassword($password){
		$this->password=$password;
	}
	public function getPassword(){
		return $this->password;
	}

}
?>