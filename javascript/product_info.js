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
                var filepath= product_info.filepath;

                //商品標籤
                var style= product_info.style;
                var material= product_info.material;
                var pattern= product_info.pattern;
                var season_1= product_info.season_1;
                var season_2= product_info.season_2;
                var season_3= product_info.season_3;

                document.title= `${product_name} | 四季商城`;

                const html_product_image = document.getElementById('product_image');
                html_product_image.src= filepath;

                const html_product_name = document.getElementById('product_name');
                html_product_name.innerHTML = product_name;

                const html_price = document.getElementById('price');
                html_price.innerHTML += price;

                const html_product_desc = document.getElementById('product_desc');
                html_product_desc.innerHTML = product_desc;

                const product_tags= document.getElementById('product_tags');

                function add_season_tag(season) {
                    if (season == 'spring') {
                        product_tags.innerHTML += '<span class="tag tag-spring">春季</span>';
                    } else if (season == 'summer') {
                        product_tags.innerHTML += '<span class="tag tag-summer">夏季</span>';
                    } else if (season == 'autumn') {
                        product_tags.innerHTML += '<span class="tag tag-autumn">秋季</span>';
                    } else if (season == 'winter') {
                        product_tags.innerHTML += '<span class="tag tag-winter">冬季</span>';
                    }
                }
                add_season_tag(season_1);
                add_season_tag(season_2);
                add_season_tag(season_3);

                function add_tag(tag_value) {
                    if (tag_value!=null && tag_value!= 'NA'){
                        product_tags.innerHTML +=`<span class="tag">${tag_value}</span>`;
                    }
                }
                add_tag(style);
                add_tag(pattern);
                add_tag(material);
            }
        })
        .catch(error => console.error('Error fetching products:', error));
});