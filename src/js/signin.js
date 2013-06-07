$(document).ready(function(){
	$("#sign-in-submit").click(function(){
		$.post("./php/signin.php",{
			username: $("#sign-in-username-field").val(),
			password: $("#sign-in-password-field").val()
		}, function(data){
			alert(data);
		});
	});
});