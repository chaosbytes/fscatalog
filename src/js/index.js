$(document).on("pageinit", function() {
	$("#sign-in-submit").click(function() {
		$.post("./php/signin.php", {
			username: $("#sign-in-username-field").val(),
			password: $("#sign-in-password-field").val()
		}, function(data) {
			alert(data);
		});
	});
	$("#sign-up-submit").click(function() {
		$.post("./php/signup.php", {
			username: $("#sign-up-username-field").val(),
			password: $("#sign-up-password-field").val(),
			passwordConfirm: $("#sign-up-password-confirm-field").val()
		}, function(data) {
			alert(data);
		});
	});
	$("#sign-in-panel").on("panelclose", function(event, ui) {
		$("#sign-in-panel").removeClass("panel-open");
	});
	$("#sign-up-panel").on("panelclose", function(event, ui) {
		$("#sign-up-panel").removeClass("panel-open");
	});

	$("#page").on("swiperight", function(event) {
		if (!$("#sign-up-panel").hasClass("panel-open")) {
			$("#sign-in-panel").panel("open");
			$("#sign-in-panel").addClass("panel-open");

		}
	});
	$("#page").on("swipeleft", function(event) {
		if (!$("#sign-in-panel").hasClass("panel-open")) {
			$("#sign-up-panel").panel("open");
			$("#sign-up-panel").addClass("panel-open");
		}
	});
});