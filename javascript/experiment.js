document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('orderForm').addEventListener('submit', function(event) {
        const sections = ['green-section', 'red-section', 'blue-section', 'yellow-section'];
        let isValid = true; // 追踪验证状态

        // 遍历每个 section 进行验证
        for (let section of sections) {
            const inputs = document.querySelectorAll(`#${section} input[type="number"]`);
            const values = [];

            // 检查是否有未填的输入框
            for (let input of inputs) {
                if (input.value === "") {
                    alert(`请确保 ${section} 内的所有输入框都已填写。`);
                    isValid = false;
                    event.preventDefault(); // 阻止表单提交
                    return; // 跳出循环
                }
                values.push(Number(input.value));
            }
            console.log('Form isValid:', isValid);


            // 检查是否有重复的值
            const uniqueValues = [...new Set(values)];
            if (uniqueValues.length !== values.length) {
                alert(`${section} 内的排序1-4不能重复。`);
                isValid = false;
                event.preventDefault(); // 阻止表单提交
                return; // 跳出循环
            }

            // 检查是否所有值都在1到4之间
            for (let value of values) {
                if (value < 1 || value > 4) {
                    alert(`${section} 内的排序的值必须在1到4之间。`);
                    isValid = false;
                    event.preventDefault(); // 阻止表单提交
                    return; // 跳出循环
                }
            }
        }

        // 如果有任何验证失败，阻止表单提交
        if (!isValid) {
            event.preventDefault(); // 防止表单提交
        }
    });
});



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

