<?php
class Login {
	public $userName;
	public $userPassword; 
	public function __construct($userName, $userPassword) {
        $this->userName = $userName;
    	$this->userPassword = $userPassword;
    }      
}

class Users extends Login {
		
}

$david = new Users('david', 'david415');

if($_SERVER['REQUEST_METHOD'] == "POST") {

	if($david->userName == $user && $david->userPassword == $secret) {
		echo 'SUCCESS! YOU HAVE LOGGED IN ' . strtoupper($david->userName);
		setcookie($david->userName, $david->userPassword);
	} else {
		echo 'Oh something went wrong, please try again.';
	}

	
}

// print_r($_SERVER);

// echo 'you did it ' . $david->userName . '!';
?>