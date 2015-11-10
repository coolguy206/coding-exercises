<?php
class Users {
	public $userName;
	public $userPassword;
	public function __construct($userName, $userPassword) {
        $this->userName = $userName;
    	$this->userPassword = $userPassword;
    }
    
}

class newUsers extends Users {
	public $userName = 'riley';
	public $userPassword = 'riley415';
}

$david = new Users('david', 'david415');
$riley = new newUsers('riley', 'riley415');

setcookie($david->userName, $david->userPassword);
setcookie($riley->userName, $riley->userPassword);


if($_SERVER['REQUEST_METHOD'] == "POST") {
	$user = htmlentities($_REQUEST['user']);
	$secret = htmlentities($_REQUEST['secret']);

	if($david->userName == $user && $david->userPassword == $secret) {
		echo '<p class="success">SUCCESS! YOU HAVE LOGGED IN ' . strtoupper($david->userName) . '!</p>';
	} else {
		echo '<p class="fail">Oh something went wrong, please try again.</p>';
	}

	
}

// print_r($david);
// print_r($riley);

?>