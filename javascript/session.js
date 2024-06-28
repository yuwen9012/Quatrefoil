function get_session(email_sess){
	$.ajax({
		url:"../back_end/ajax_check_sess.php",
		type:"POST",
		dataType: 'json',
		success: function(response) {
			if (!response.loggedin){
				window.location.href="login.php";
			} else {
				email_sess= response.email;
				console.log(email_sess);
			}
		},
		error: function(jqXHR) {
            console.log(jqXHR.readyState+": "+ jqXHR.status);
        }
	});
}

function check_session() {
	$.ajax({
		url:"../back_end/ajax_check_sess.php",
		type:"POST",
		dataType: 'json',
		success: function(response) {
			if (response.loggedin){
				window.location.href="home.php";
			} 
		},
		error: function(jqXHR) {
            console.log(jqXHR.readyState+": "+ jqXHR.status);
        }
	});
}