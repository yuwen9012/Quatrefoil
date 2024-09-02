<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/winter.css">

    <title>四季更褶 | 冬季型</title>
</head>
<body>
    <?php include "navbar.php"; ?> 

    <!-- 第一區塊 -->
    <div class="container-fluid" style="background-color: #c3e4f2; height: flex; width:100%"><br><br><br>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="box1">
                    <br><br>
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="row">
                            <p class="t1" style="margin: 40px 0px;">您的四季色彩類型：<span>冬季型</span></p>
                            <p class="t2">#鮮明 #時尚感 #個性 #白皙</p>
                            <p class="t3">冷豔時尚、氣場強大、對比美、高冷王者👑、🕶️✨❄️、（霸總的感覺）、黑白我主場、聚光燈帶了、眼神殺、（有點距離感）</p>
                        </div>
                        <div class="row g-1">
                            <div class="col-12 col-lg-7 col-xl-5">
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">膚色</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">皮膚基調偏冷色調，白皙厚實、具透明感</div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">臉頰</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">霧面冷粉</div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">眼睛</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">黑棕或烏黑，瞳孔分明</div>
                                    </div>
                                </div> 
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">嘴唇</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">玫瑰粉</div>
                                    </div>
                                </div>     
                            </div>
                            <div class="col-12 col-lg-5 col-xl-4">
                                <div class="row g-1">
                                    <div class="col-sm-5">
                                        <div class="box4">代表明星</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="box6" style="font-size: 15px;">小松菜奈、剛力彩芽、<br>高圓圓、樸秀英、<br>菅田將暉、松本潤<br>山崎賢人、本木雅宏</div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-sm-5">
                                        <div class="box5">飾品</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="box7" style="font-size: 15px;">亮面銀、白金、<br>純色寶石</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <img src="images/winter.png" class="float-end img-fluid">
                            </div>
                        </div>
                    <div class="col-1"></div>   
                    <div class="row">
                </div><br><br>
            </div>
            <div class="col-1"></div>
        </div><br><br><br>
    </div>

    <!-- 商品區塊 -->
    <div class="container-fluid my-3 px-3" style="background-color: #fbfbfb; height: flex; ">
        <p style="font-family: 'Inter';color: #000000;font-weight: 700; font-size: 20px; margin-bottom: 40px;"><br><br>根據測驗結果，為您推薦以下服裝單品：</p>
             <div class="row d-flex justify-content-center" id="myGoods" style="width:80%; height: 70%; margin: 0 auto;">        
             </div>
        <br><br>
    </div>

    <!-- 實驗區塊 -->
    <?php include "experiment.php"; ?> 
    <!-- 底部區塊 -->
    <?php include "footer.php"; ?> 

<script>
    var goods = [
        {
            'name':'純棉襯衫-白色',
            'price':499,
            'content':'🩵純粹百搭，極簡卻能打造多樣風格！', 
            'image': 'images/winter_good1.png'
        },
        {
            'name':'日系寬褲-黑色',
            'price':680,
            'content':'告別束縛感，展現你的自信風采🤗', 
            'image': 'images/winter_good2.png'
        },
        {
            'name':'男士時尚棉短褲',
            'price':339,
            'content':'☀️炎夏的時尚宣言！這款合身剪裁的...', 
            'image': 'images/winter_good3.png'
        },
        {
            'name':'亞麻窄管長褲-正紅色',
            'price':499,
            'content':'展現你的時尚態度！簡約設計...', 
            'image': 'images/winter_good4.png'
        },
        {
            'name':'日系寬鬆抽繩長褲-花瓣粉',
            'price':549,
            'content':'🩷自然隨性，搭配T恤或毛衣...', 
            'image': 'images/winter_good5.png'
        },
        {
            'name':'針織無袖＋短裙set-灰色',
            'price':750,
            'content':'🩶搭配珍珠項鍊與高跟鞋，展現優雅...', 
            'image': 'images/winter_good6.png'
        },
        {
            'name':'短版西裝外套-海軍藍',
            'price':599,
            'content':'💖 皮革長袖上衣，寬鬆版型，搭配...', 
            'image': 'images/winter_good7.png'
        },
        {
            'name':'立領無袖粗針織短洋裝-米白色',
            'price':599,
            'content':'🤍 簡約設計，搭配平底鞋或涼鞋...', 
            'image': 'images/winter_good8.png'
        }
    ];

    for (let i = 0; i < goods.length; i++) {
         let html = '<div class="col-12 col-sm-6 col-lg-4 col-xl-3 mt-2">' +
               '<div class="card">' +
               '<div class="card-body">' +
               '<img class="card-img-top" src="' + goods[i].image + '" alt="' + goods[i].name + '圖片">' +
               '<h5 class="card-title">' + goods[i].name + '</h5>' +
               '<p class="card-price">$' + goods[i].price + '</p>' +
               '<p class="card-content">' + goods[i].content + '</p>' +
               '</div>' +
               '</div>' +
               '</div>';

    $('#myGoods').append(html);       
    }

    function submitOrder() {
    // 获取表单元素
    var form = document.getElementById('orderForm');
    
    // 提交表单
    form.submit();
}
</script>
</body>
</html>
