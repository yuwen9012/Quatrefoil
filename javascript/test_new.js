document.getElementById('file-upload').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        
        // 当文件被读取完后，将其作为图像源设置到图片上
        reader.onload = function(e) {
            document.getElementById('uploaded-image').src = e.target.result;
        }
        
        // 读取文件
        reader.readAsDataURL(file);
    }
});