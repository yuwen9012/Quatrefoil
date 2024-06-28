function userpwd_check() {
	const pwdRegex= /^\w{6,30}$/;
	var newpwd= $("#newpwd").val();
        
    if(!pwdRegex.test(newpwd)){
        $("#error_msg").text("請輸入6-30位密碼，可用英文、數字及底線_");
        $("#newpwd").addClass("error_input");
        return false;
    } else{
        $("#newpwd").removeClass("error_input");
        $("#error_msg").text("");
    }
    return true;
}

function pwdConf_check() {
	var newpwd= $("#newpwd").val();
	var pwdConf= $("#pwdConf").val();
        
    if(newpwd!=pwdConf){
    	$("#error_msg").text("密碼確認不一致");
    	$("#pwdConf").addClass("error_input");
    	return false;
    } else{
    	$("#pwdConf").removeClass("error_input");
    	$("#error_msg").text("");
    }
    return true;
}

$(document).ready( function() {
	var email;
	get_session(email);

	$("#revise_pwd").submit(function (event) {
		event.preventDefault();
		var status= userpwd_check() && pwdConf_check();
		if (status){
			var newpwd= $("#newpwd").val();
			$.ajax({
        		url: "../back_end/ajax_revise_pwd.php",
        		type: "POST",
        		data: { "newpwd": newpwd },
        		dataType: 'json',
        		success: function(response) {
                	$("#error_msg").text(response.msg);
        		},
        		error: function(jqXHR) {
            		console.log(jqXHR.readyState+": "+ jqXHR.status);
            		$("#error_msg").text("發生錯誤，請稍後再試");
        		}
    		});
		}
	});
});