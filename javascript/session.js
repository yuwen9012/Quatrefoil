function get_session(callback){
	$.ajax({
		url:"../php/ajax_check_sess.php",
		type:"POST",
		dataType: 'json',
		success: function(response) {
			if (!response.loggedin){
				window.location.href="login.php";
			} else {
				callback(response);
			}
		}
	});
}

function check_session() {
	$.ajax({
		url:"../php/ajax_check_sess.php",
		type:"POST",
		dataType: 'json',
		success: function(response) {
			if (response.loggedin){
				window.location.href="home.php";
			} 
		}
	});
}