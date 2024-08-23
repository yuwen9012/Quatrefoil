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
		},
		error: function(jqXHR) {
            console.log(jqXHR.readyState+": "+ jqXHR.status);
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
		},
		error: function(jqXHR) {
            console.log(jqXHR.readyState+": "+ jqXHR.status);
        }
	});
}