document.addEventListener('DOMContentLoaded', function() {
    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');

    fetch('php/load_product_info.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({'id': id})
    })
        .then(response => response.json())
        .then(data=>{
            if (data.state){
                var product_info= data.product_info;

                // 商品基本資訊
                var product_name= product_info.product_name;
                var image_name= product_info.image_name;
                var price= product_info.price;
                var product_desc= product_info.product_description;

                //商品標籤
                var style= product_info.style;
                var material= product_info.material;
                var pattern= product_info.pattern;
                var season_1= product_info.season_1;
                var season_2= product_info.season_2;
                var season_3= product_info.season_3;

                //後續動作(函數)
                const block1 = document.getElementById('product_name');
                block1.innerHTML += product_name;

                const block2 = document.getElementById('price');
                block2.innerHTML += price;

                const block3 = document.getElementById('product_desc');
                block3.innerHTML += product_desc;
            } else{
                const block1 = document.getElementById('product_name');
                block1.innerHTML = '商品不存在';

                const block2 = document.getElementById('price');
                block2.innerHTML = '';

                const block3 = document.getElementById('product_desc');
                block3.innerHTML = '';
            }
        })
        .catch(error => console.error('Error fetching products:', error));
});