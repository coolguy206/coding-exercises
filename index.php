<?php
if(isset($_REQUEST['name'])) {
	$name = $_REQUEST['name'];
}

if(isset($_REQUEST['password'])) {
	$password = $_REQUEST['password'];
}

// setcookie($name, $password);
// setcookie('user', 'ohyeah', time() - 3600);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Coding exercise</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
// QUESTION #1
var youngHuman = {};
youngHuman.Baby = function(babyName, age, gender, race, species) {
	this.babyName = babyName;
	this.age = age;
	this.gender = gender;
	this.race = race;
	this.species = 'human';
}
youngHuman.Baby.prototype.cry = function() {
	console.log(this.babyName + " is crying!");
};

youngHuman.Toddler = function(babyName, age, gender, race, walk, solidFood) {
	this.babyName = babyName;
	this.age = age;
	this.gender = gender;
	this.race = race;
	this.walk = walk;
	this.solidFood = solidFood;
}

youngHuman.Toddler.prototype =  new youngHuman.Baby;

youngHuman.riley = new youngHuman.Baby('Riley', '5 months', 'male', 'asian');

console.log(youngHuman.riley.babyName + ' is a ' + youngHuman.riley.species);

youngHuman.riley.cry();

youngHuman.melani = new youngHuman.Baby('Melani', '1yr', 'female', 'asian');

console.log(youngHuman.melani.babyName + ' is a ' + youngHuman.melani.species);

youngHuman.melani.cry();

youngHuman.kennedy = new youngHuman.Toddler('Kennedy', '3yr', 'female', 'asian', true, true);

console.log(youngHuman.kennedy.babyName + ' is a ' + youngHuman.kennedy.species);

youngHuman.kennedy.cry();



// var cookie = $.cookie('testCookie', 'value');
// console.log(cookie);


var Users = {};
	Users.People = function(user, pass){
		this.user = user;
		this.pass = pass;
	}

Users.david = new Users.People('david', 'david206');

$(document).ready(function(){
	

	if($.cookie('david')){
		$('#existing input[name="user"]').val(Users.david.user);
		$('#existing input[name="secret"]').val($.cookie('david'));
	}

	$('#existing input[type="submit"]').click(function(){
		var userName = $('#existing input[name="user"]').val();
		var userPassword = $('#existing input[name="secret"]').val();
		var container = $('<div></div>');
		if(userName === Users.david.user && userPassword === Users.david.pass) {
			// console.log('success');
			$('#existing').after(container);
			container.text('SUCCESS! YOU HAVE LOGGED IN ' + Users.david.user.toUpperCase() + '!').delay(3000).fadeOut(function(){$(this).remove();});
			$.cookie(Users.david.user, Users.david.pass, {expires: 7});
			// container.remove();
		} else {
			// console.log('fail');
			$('#existing').after(container);
			container.text('Oh something went wrong, please try again.').delay(3000).fadeOut(function(){$(this).remove();});
		}
		return false;
	});
});

</script>
</head>

<body>
<!--
<h2>New Users</h2>
<form method="get" action="">
	<label>Name</label>
	<input type="text" name="name">
	<label>Password</label>
	<input type="text" name="password">
	<input type="submit" value="Register">
</form>
-->

<?php 
class Users {
	public $userName;
	public $userPassword;
	public function __construct($userName, $userPassword) {
        $this->userName = $userName;
    	$this->userPassword = $userPassword;
    }
    
}

if($_SERVER['REQUEST_METHOD'] == "GET") {
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];

/*echo 'hello my name is ' . htmlentities($name) . ' and my password is ' . htmlentities($password);*/

$guy = new Users($name, $password);
print_r($guy);

}

?>


<h2>Returning Users</h2>
<form method="post" action="" id="existing">
	<label>Name</label>
	<input type="text" name="user">
	<label>Password</label>
	<input type="password" name="secret">
	<input type="submit" value="Log In">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
$user = $_REQUEST['user'];
$secret = $_REQUEST['secret'];

	print_r($guy);
	if($guy->userName == $user) {
		echo 'success';
	}
}
?>

</body>

</html>