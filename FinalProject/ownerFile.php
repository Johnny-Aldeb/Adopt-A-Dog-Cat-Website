<?php

class FileOwner{

	//class properties 

	private $kind_of_pet;
	private $Breed;
	private $age;
	private $Gender;
	private $yesOrno;
	private $noOryes;
	private $noryes;
	private $firstName;
	private $lastName;
	private $email;

	private $storage= "available_pet_information_file.json";
	private $stored_users; 
	private $new_owner;
	


	// class methods

	public function __construct($kind_of_pet, $Breed, $age, $Gender, $yesOrno, $noOryes, $noryes, $firstName, 
		$lastName, $email){

		

		$this->kind_of_pet = $kind_of_pet;
		$this->Breed = $Breed;
		$this->age = $age;
		$this->Gender = $Gender;
		$this->yesOrno = $yesOrno;
		$this->noOryes = $noOryes;
		$this->noryes = $noryes;
		$this->firstName =$firstName;
		$this->lastName = $lastName;
		$this->email = $email;
		

         
		$this->stored_users = json_decode(file_get_contents($this->storage), true); 
        
   $this->new_owner = [
			
			"Petowner:"=>$this->firstName." ".$this->lastName, 
			"kind:"=>$this->kind_of_pet,
			"Breed:"=>$this->Breed,
			"Age:"=>$this->age,
			"Gender:"=>$this->Gender,
			"get along with dogs?"=>$this->yesOrno,
			"get along with cats?"=>$this->noOryes,
			"Suitable for a family with small children?"=>$this->noryes,
			"Owner Email"=>$this->email,
			


		];


		array_push($this->stored_users, $this->new_owner);
		file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT));


		
		

	}




















}
?>