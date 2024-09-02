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

            $('#contain-experiment').show();

		} else{
			$('#contain-experiment').hide();
		}
	});


    document.getElementById('orderForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const sections = ['green-section', 'red-section', 'blue-section', 'yellow-section'];
        
        for (let section of sections) {
            const inputs = document.querySelectorAll(`#${section} input[type="number"]`);
            const values = [];

            for (let input of inputs) {
                if (input.value === "") {     
                    document.getElementById(`${section}`).scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    alert(`請確保所有輸入框皆已填寫`);
                    return false;
                } else{
                    values.push(Number(input.value));
                }
            }

            const uniqueValues = [...new Set(values)];
            if (uniqueValues.length !== values.length) {
                document.getElementById(`${section}`).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                alert(`排序不得重複`);
                return false;
            } 
        }
        this.submit();
	alert(`表單上傳成功，感謝撥空填答`);
    });

});

