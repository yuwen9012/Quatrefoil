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
    <link rel="stylesheet" href="css/summer.css">

    <title>四季更褶 | 夏季型</title>
</head>
<body>
    <?php include "navbar.php"; ?> 


     <!-- NEW 第一區塊 -->

    <div class="container-fluid" style="background-color: #b5e2d4; height: flex; width:100%"><br><br><br>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="box1">
                    <br><br>
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="row">
                            <p class="t1" style="margin: 40px 0px;">您的四季色彩類型：<span>夏季型</span></p>
                            <p class="t2">#溫和 #清爽 #書卷氣 #俐落</p>
                            <p class="t3">仙氣飄飄🪷、🧊🧊🧊、溫文儒雅、氣質出眾、（容易臉紅）、清新俊逸、低調時尚、(莫蘭迪色我本命）、四季型最溫柔、文青感</p>
                        </div>
                        <div class="row g-1">

                            <div class="col-12 col-lg-7 col-xl-5">
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">膚色</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">皮膚基調偏冷，常為瓷器般的乳白色、橄欖色或小麥色</div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">臉頰</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">霧面的粉紅色</div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">眼睛</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">柔和的焦茶色、深棕色，<br>眼白帶灰藍色</div>
                                    </div>
                                </div> 
                                <div class="row g-1">
                                    <div class="col-sm-4">
                                        <div class="box2">嘴唇</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box3" style="font-size: 15px;">柔和帶冷的玫瑰粉色</div>
                                    </div>
                                </div>     
                            </div>
                            <div class="col-12 col-lg-5 col-xl-4">
                                <div class="row g-1">
                                    <div class="col-sm-5">
                                        <div class="box4">代表明星</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="box6" style="font-size: 15px;">綾瀨遙、蒼井優、<br>李小璐、金雪炫、<br>福山雅治、小栗旬、<br>向井理、二宮和也</div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-sm-5">
                                        <div class="box5">飾品</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="box7" style="font-size: 15px;">啞光銀、鑽石、<br>水晶、寶石、<br>乳白珍珠、玻璃質</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <img src="images/summer.png"  class="float-end img-fluid">
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
            'name':'雪紡長袖襯衫-冷灰綠',
            'price':398,
            'content':'🩶展現紳士品格，打造優雅型男！🩶', 
            'image': 'images/summer_good1.png'
        },
        {
            'name':'綁帶錐形長褲-灰藍色',
            'price':550,
            'content':'🩵夏日舒適首選🩵 寬鬆剪裁，無拘...', 
            'image': 'images/summer_good2.png'
        },
        {
            'name':'純棉短袖襯衫-櫻花粉色',
            'price':399,
            'content':'春風拂面，型男新裝😍嚴選高質感...', 
            'image': 'images/summer_good3.png'
        },
        {
            'name':'棉質寬鬆短褲-灰藍色',
            'price':495,
            'content':'清爽利落，品味之選！灰藍色棉質...', 
            'image': 'images/summer_good4.png'
        },
        {
            'name':'清新配色V領排扣背心＋罩衫set',
            'price':369,
            'content':'💐優雅迷人，打造夏日浪漫💐 輕盈...', 
            'image': 'images/summer_good5.png'
        },
        {
            'name':'簡約合身長袖襯衫-淺藕粉',
            'price':599,
            'content':' 💼展現知性魅力，打造專業形象🩶', 
            'image': 'images/summer_good6.png'
        },
        {
            'name':'合身雙口袋短褲-薰衣草紫',
            'price':349,
            'content':'🪻彷彿來到寧靜的薰衣草花園～剪裁...', 
            'image': 'images/summer_good7.png'
        },
        {
            'name':'寬鬆棉質長褲-米灰色',
            'price':450,
            'content':'優雅舒適，職場新風尚！採用寬鬆版型...', 
            'image': 'images/summer_good8.png'
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




