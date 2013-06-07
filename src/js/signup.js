$(document).ready(function(){
	$("#sign-up-submit").click(function(){
		$.post("./php/signup.php",{
			username: $("#sign-up-username-field").val(),
			password: $("#sign-up-password-field").val(),
			passwordConfirm: $("#sign-up-password-confirm-field").val()
		}, function(data){
			alert(data);
		});
	});
});