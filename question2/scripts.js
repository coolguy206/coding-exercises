// JAVASCRIPT VERSION OF QUESTION #2
// ---------------------------------------------------------

 // $.removeCookie('david');

$(document).ready(function(){
	var Users = {};
	Users.People = function(user, pass){
		this.user = user;
		this.pass = pass;
	};

	Users.david = new Users.People('david', 'david206');
	
	if($.cookie('david')){
		$('#existing input[name="user"]').val(Users.david.user);
		$('#existing input[name="secret"]').val($.cookie('david'));
	}

	$('#existing').submit(function(){
		$.post('class.php', function(data){
			var container = $('<div></div>');
			$('#existing').after(container);
			container.text(data)
			.delay(3000)
			.fadeOut(function(){
				$(this).remove();
			});
		});
		return false;
	});
});