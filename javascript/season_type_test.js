function face_detect(gender, lenses, hair_dying){
	var formData = new FormData();

	formData.append('hair_dying', hair_dying);
	formData.append('lenses', lenses);
	formData.append('gender', gender);

    var photo = $('#photo')[0].files[0];
    formData.append('photo', photo);

	$.ajax({
		url: "../php/ajax_detect_image.php",
		type: "POST",
		data: formData,
		contentType: false,
        processData: false,
		success: function(response) {
			try{
				if (typeof response === "string") {
                	response = JSON.parse(response);
            	}
			} catch (e){
				alert('發生錯誤，請稍後再試')
			}

			if (response.state){
				if(response.msg=='spring'){
					window.location.href="spring.php";
				}else if (response.msg=='summer'){
					window.location.href="summer.php";
				}else if (response.msg=='autumn'){
					window.location.href="autumn.php";
				}else if (response.msg=='winter'){
					window.location.href="winter.php";
				}else{
					alert(response.msg);
				}
			} else{
				alert(response.msg);
			}
		},
		error: function(jqXHR) {
            alert("發生錯誤，請稍後再試");
		}
	});
}

$(document).ajaxStart(function() {
    $('#loading_animation').show();
}).ajaxStop(function() {
    $('#loading_animation').hide();
});


$(document).ready(function(){

	var gender='';
	var lenses='';
	var hair_dying='';

	$('#uploadForm').submit(function(event) {
		event.preventDefault();

		const radios_gender = document.getElementsByName('gender');
		for (const radio of radios_gender) {
    		if (radio.checked) {
        		gender = radio.value;
        		break;
      		}
    	}

		const radios_lenses = document.getElementsByName('lenses');
		for (const radio of radios_lenses) {
    		if (radio.checked) {
        		lenses = radio.value;
        		break;
      		}
    	}

		const radios_hair_dying = document.getElementsByName('hair_dying');
		for (const radio of radios_hair_dying) {
    		if (radio.checked) {
        		hair_dying = radio.value;
        		break;
      		}
    	}

    	if(gender==''){
    		alert('請勾選性別');
    	}else if (lenses==''){
    		alert('請勾選是否配戴變色片');
    	}else if (hair_dying==''){
            alert('請勾選是否染髮');
    	} else {
    		face_detect(gender, lenses, hair_dying);
    	}
	});
});