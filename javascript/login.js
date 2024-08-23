function locat_register(){
	window.location.href="register.php";
}

function login_verify(){
	var email= $("#email").val();
	var userpwd= $("#userpwd").val();

	$.ajax({
		url:"../php/ajax_login_verify.php",
		type:"POST",
		data: {"email": email, "userpwd": userpwd},
		dataType:"json",
		success: function(response) {
			if (response.state){
				window.location.href="home.php";
			} else {
				$("#error_msg").text(response.msg);
			}

		},
		error: function(jqXHR) {
            console.log(jqXHR.readyState+": "+ jqXHR.status);
            $("#error_msg").text("發生錯誤，請稍後再試");
        }
	});
}

$(document).ready(function(){
	check_session();

	$('#form').submit(function(event) {
		event.preventDefault();
		login_verify();
	});
});