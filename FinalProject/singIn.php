<?php

class LoginUser{

	//class properties 

	private $username;
	private $password;
	public $error;
	public $success;
	private $storage= "login.json";
	private $stored_users; 
	


	// class methods

	public function __construct($username, $password){

		$this->username = $username;
		$this->password = $password;

		$this->stored_users = json_decode(file_get_contents($this->storage), true); 
		$this->login();


	}

	private function login(){

		foreach ($this->stored_users as $user){
			if($user['username'] == $this->username){
				if($this->password == $user['password']){

					 $_SESSION['user1'] = $this->username;

					 echo "<script>location='fileforpet.php'</script>";
					  
					

					 
					 


					 
					 

				}

				

		}



	}

	return $this->error = "Login Failed. Wrong username/password. Please try again.";
	


}








}



?>
