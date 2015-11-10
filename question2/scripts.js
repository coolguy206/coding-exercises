// JAVASCRIPT VERSION OF QUESTION #2
// ---------------------------------------------------------

 // $.removeCookie('david');
 // $.removeCookie('riley');

var Users = {};
	Users.People = function(user, pass){
		this.user = user;
		this.pass = pass;
	};

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