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

	get_session(function(data) {
		$("#email").text(data.email);
	});

	$("#newpwd").on("input", userpwd_check);

	$("#pwdConf").on("input", pwdConf_check);

	$("#revise_pwd").on("click", function(){
		var button_class= $("#revise_pwd").attr('class');

		if (button_class.includes('primary')){
			$(this).text('取消');
			$(this).removeClass('primary');
			$(this).addClass('danger');

			$("#form").css({'display': 'block'});
		} else if (button_class.includes('danger')){
			$(this).text('修改');
			$(this).removeClass('danger');
			$(this).addClass('primary');

			$("#form").css({'display': 'none'});
		}
	});

	$("#form").submit(function (event) {
		event.preventDefault();
		var status= userpwd_check() && pwdConf_check();
		if (status){
			var oldpwd= $("#oldpwd").val();
			var newpwd= $("#newpwd").val();
			$.ajax({
        		url: "../php/ajax_revise_pwd.php",
        		type: "POST",
        		data: { "oldpwd": oldpwd ,"newpwd": newpwd },
        		dataType: 'json',
        		success: function(response) {
                	$("#error_msg").text(response);
        		},
        		error: function(jqXHR) {
            		$("#error_msg").text("發生錯誤，請稍後再試");
        		}
    		});
		}
	});
});