function get_experiment_image(callback){
	$.ajax({
		url: "../php/ajax_load_face_image.php",
		type: "POST",
		datatype: "json",
		success: function(response){
			callback(response);
		},
		error: function (jqXHR) {
			alert("發生錯誤，請稍後再試");
		}
	});
}

function shuffleElements(parent) {
    let items = parent.children;
    for (let i = items.length; i >= 0; i--) {
        parent.appendChild(items[Math.random() * i | 0]);
    }
}

$(document).ready( function () {

	get_experiment_image(function(response) {
		if (response.state== true){
			var image_name= response.experiment_img;
			document.querySelectorAll('img.user-face').forEach(function(img) {
    			img.src = 'images/output/'+image_name;
			});
			shuffleElements(document.getElementById('green-section'));
    		shuffleElements(document.getElementById('red-section'));
    		shuffleElements(document.getElementById('blue-section'));
    		shuffleElements(document.getElementById('yellow-section'));

		} else{
			$('#contain-experiment').hide();
		}
	});

    //使用者反饋

});
