<?php 
class User{
	private $id;
	private $email;
	private $createdAt;
	public function __construct($id, $email, $createdAt){
		$this->id=$id;
		$this->email=$email;
		$this->createdAt=$createdAt;
	}
	public function setId($newId){
		$this->id=$newId;
	}
	public function getId(){
		return $this->id;
	}
	public function setEmail($newEmail){
		$this->email=$newEmail;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setCreatedAt($newCreatedAt){
		$this->createdAt=$newCreatedAt;
	}
	public function getCreatedAt(){
		return $this->createdAt;
	}
}

?>