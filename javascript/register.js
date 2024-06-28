function email_check() {
	const emailRegex= /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	var email= $("#email").val();

    if(!emailRegex.test(email)){
        $("#error_msg").text("無效的電子郵件地址");
        $("#email").addClass("error_input");
        return false;
    } else{
        $("#email").removeClass("error_input");
        $("#error_msg").text("");
    }
    return true;
}

function email_availability(){
	var email= $("#email").val();
	$.ajax({
        url: "../back_end/ajax_email_availability.php",
        type: "POST",
        data: { "email": email },
        dataType: 'json',
        success: function(response) {
            if (!response.state) {
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

function userpwd_check() {
	const pwdRegex= /^\w{6,30}$/;
	var userpwd= $("#userpwd").val();
        
    if(!pwdRegex.test(userpwd)){
        $("#error_msg").text("請輸入6-30位密碼，可用英文、數字及底線_");
        $("#userpwd").addClass("error_input");
        return false;
    } else{
        $("#userpwd").removeClass("error_input");
        $("#error_msg").text("");
    }
    return true;
}

function pwdConf_check() {
	var userpwd= $("#userpwd").val();
	var pwdConf= $("#pwdConf").val();
        
    if(userpwd!=pwdConf){
    	$("#error_msg").text("密碼確認不一致");
    	$("#pwdConf").addClass("error_input");
    	return false;
    } else{
    	$("#pwdConf").removeClass("error_input");
    	$("#error_msg").text("");
    }
    return true;
}

$(document).ready(function() {
    check_session();

    $("#email").on("input", email_check);

    $("#userpwd").on("input", userpwd_check);

    $("#pwdConf").on("input", pwdConf_check);

    $('#form').submit(function(event) {
    	event.preventDefault();
		var status= email_check() && userpwd_check() && pwdConf_check();
    	if(status){
    		email_availability();
    	} 
	});
});