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
    <link rel="stylesheet" href="css/spring.css">
    <link rel='stylesheet' type='text/css' href='./css/Navbar.css'>

    <title>spring</title>
</head>
<body>
    <?php include "navbar.php"; ?> 

    <!-- NEW 第一區塊 -->
    <div class="container-fluid" style="background-color: #f8d2d6; height: flex; width:100%"><br><br><br>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="box1">
                    <br><br>
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="row">
                            <p class="t1" style="margin: 40px 0px;">您的四季色彩類型：<span>春季型</span></p>
                            <p class="t2">#開朗 #陽光 #朝氣感 #熱情</p>
                            <p class="t3">笑起來春天來臨😳、充滿活力、請支援防曬、眼神靈動、親切感100、（感覺皮很薄）、四季型色素最淺、（看起來很年輕）、🌸🍃🌼</p>
                        </div>
                        <div class="row g-1">
                            <div class="col-12 col-lg-7 col-xl-5">
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">膚色</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">皮膚基調偏暖色調，<br>膚色明亮白皙具透明感</div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">臉頰</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">偏暖橘色調</div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">眼睛</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">明亮的茶色、棕色系</div>
                                    </div>
                                </div> 
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">嘴唇</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">偏橘的粉色</div>
                                    </div>
                                </div>     
                            </div>
                            <div class="col-12 col-lg-5 col-xl-4">
                                <div class="row g-1">
                                    <div class="col-sm-5">
                                        <div class="box4">代表明星</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="box6" style="font-size: 15px;">石原里美、橋本環奈、<br>徐若瑄、李智恩、<br>山下智久、岡田將生、<br>千葉雄大、坂口健太郎</div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-sm-5">
                                        <div class="box5">飾品</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="box7" style="font-size: 15px;">亮面金色、香檳色、<br>玫瑰金</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <img src="images/spring.png"  class="float-end img-fluid">
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
            'name':'針織圓領短袖上衣-小雞黃',
            'price':439,
            'content':'🐤 活潑亮眼💛展現甜美陽光氣質。', 
            'image': 'images/spring_good1.png'
        },
        {
            'name':'反摺中線短褲-寶寶藍',
            'price':500,
            'content':'🩵寬鬆版型☁️簡單搭配展現甜美。', 
            'image': 'images/spring_good2.png'
        },
        {
            'name':'丹寧寬鬆外套-粉色',
            'price':549,
            'content':'寬鬆設計，搭配短裙或牛仔褲，展現...', 
            'image': 'images/spring_good3.png'
        },
        {
            'name':'亞麻無袖半身裙套裝-蘋果綠',
            'price':699,
            'content':'打造夏日清新風格～輕盈舒適，隨性...', 
            'image': 'images/spring_good4.png'
        },
        {
            'name':'雙口袋秋日套裝-藍色',
            'price':699,
            'content':'🤍打造慵懶氣息～搭配涼鞋或平底鞋...', 
            'image': 'images/spring_good5.png'
        },
        {
            'name':'馬卡龍色學院風套裝-女童',
            'price':699,
            'content':'🌸甜美學院風必備🌸讓你輕鬆打造出...', 
            'image': 'images/spring_good6.png'
        },
        {
            'name':'圓領澎袖襯衫-柔黃色',
            'price':439,
            'content':'☀陽光女孩的必備單品！排扣短袖襯衫...', 
            'image': 'images/spring_good7.png'
        },
        {
            'name':'抽繩休閒短褲-粉橘色',
            'price':300,
            'content':'寬鬆剪裁，時尚百搭，展現自我風格✨', 
            'image': 'images/spring_good8.png'
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
