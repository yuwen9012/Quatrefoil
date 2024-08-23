$(document).ready(function () {
	check_session();

	$("#form").submit(function(event){
		event.preventDefault();

		const emailRegex= /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		var email= $("#email").val();

    	if(!emailRegex.test(email)){
        	$("#error_msg").text("無效的電子郵件地址");
        	$("#email").addClass("error_input");
        	
    	} else{
        	$.ajax({
        		url: "../php/ajax_email_availability.php",
        		type: "POST",
        		data: { "email": email },
        		dataType: 'json',
        		success: function(response) {
            		if (response.state) {
            			$('#form').unbind('submit').submit();
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

	});
});