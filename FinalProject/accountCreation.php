

<?php


class RegisterUser{

	//class properties 

	private $username;
	private $passWord;
	
	public $error;
	public $success;
	private $storage= "login.json";
	private $stored_users; 
	private $new_user;

	



	//class method

	public function __construct($username, $password){

		$reg = "/^[a-z A-Z 0-9]+$/";
		
		$reg2 ="/(?=.*\d)(?=.*[a-z]).{4,}/";

        
        //The trim() function removes whitespace and other predefined characters from both sides of a string.
        //The FILTER_SANITIZE_STRING filter removes special characters from a string.
        // json_decode: access the values from the PHP associative array

		$this->username = trim($this->username);
		$this->username = filter_var($username, FILTER_SANITIZE_STRING);
		$this->passWord = filter_var(trim($password), FILTER_SANITIZE_STRING);

		if(preg_match($reg,$this->username ) && preg_match($reg2, $this->passWord)){


		$this->stored_users = json_decode(file_get_contents($this->storage), true); 

        
	    
		$this->new_user = [
			
			"username"=>$this->username, 
			"password"=>$this->passWord,
		];


		if($this->checkFields()){
			$this->putUser();
		}



		}else{
		    
		    return $this->error = "Wrong username/password. Please follow the description of the allowed formats for usernames and passwords.";
		}
		


	}
	

	private function checkFields(){

		if(empty($this->username) || empty($this->passWord)){
			$this->error = "Both fields are required.";
			return false;
		}
		else{
			return true;
		}

	}

	private function usernameExists(){

		foreach ($this->stored_users as $user) {
			if($this->username == $user['username']){
				$this->error = "Username already taken, please choose another username";
				return true;
			}
		}

		return false;

	}

    //file_put_contents(filename, data)
	//The array_push() function inserts one or more elements to the end of an array.
	//json_encode: convert into a coded form. 
	//JSON_PRETTY_PRINT used with json_encode() function to print JSON data with proper alignment and particular format. like [1, 2, 3]

	private function putUser(){

		if($this->usernameExists() == FALSE){
			array_push($this->stored_users, $this->new_user);
			if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
				return $this->success = "The account was successfully created. You are now ready to login.";

			}
			else{
				return $this->error = "Something went wrong, please try again";
			}
		}

	}





}



?>
