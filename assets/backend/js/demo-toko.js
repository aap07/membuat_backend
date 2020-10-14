$("#click-password").click(function () {
	$("#click-password").toggleClass("fa-eye-slash");
	var input_pass = $("#password");
	if (input_pass.attr("type") === "password") {
		input_pass.attr("type", "text");
	} else {
		input_pass.attr("type", "password");
	}
});
$("#click-password1").click(function () {
	$("#click-password1").toggleClass("fa-eye-slash");
	var input_pass = $("#password1");
	if (input_pass.attr("type") === "password") {
		input_pass.attr("type", "text");
	} else {
		input_pass.attr("type", "password");
	}
});
$("#click-password2").click(function () {
	$("#click-password2").toggleClass("fa-eye-slash");
	var input_pass = $("#password2");
	if (input_pass.attr("type") === "password") {
		input_pass.attr("type", "text");
	} else {
		input_pass.attr("type", "password");
	}
});
