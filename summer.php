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
    <link rel='stylesheet' type='text/css' href='./css/Navbar.css'>

    <title>summer</title>
</head>
<body>
     <nav>
    <div class='brand'>
      <a href="#"><img src="./images/icon/brand.png" width="120px" height="27px"/></a>
    </div>
    <div class='menu_center'>
      <a href="test_new.php">四季色彩測驗</a>
      <a href="#">四季商城</a>
    </div>
    <div class='menu_right'>
      <a href="#"><img src="./images/icon/shirt-black.png" width="20px" height="20px"/></a>
      <a href="#"><img src="./images/icon/user.png" width="20px" height="20px"/></a>
    </div>
  </nav>

     <!-- 第一區塊 -->
     <div class="container-fluid block1" style="background-color: #b5e2d4;">
        <div class="row">
            <div class="col-1 left-section">
            </div>
            <div class="col-10 center-section">
                <div class="box1">
                    <div class="row">
                        <div class="col-12-section">
                            <p class="t1">您的四季色彩類型：<span>夏季型</span></p>
                            <p class="t2">#溫和 #清爽 #書卷氣 #俐落</p>
                            <p class="t3">仙氣飄飄🪷、🧊🧊🧊、溫文儒雅、氣質出眾、（容易臉紅）、清新俊逸、低調時尚、(莫蘭迪色我本命）、四季型最溫柔、文青感</p>
                            <div class="row">
                                <div class="col-2 left-section">
                                   <div class="box2">膚色</div>
                                   <div class="box2">臉頰</div>
                                   <div class="box2">眼睛</div>
                                   <div class="box2">嘴唇</div>
                                </div>
                                <div class="col-2 left-section">
                                   <div class="box3" style="font-size: 12px;">皮膚基調偏冷色調，<br>常為瓷器班的乳白色、淺冷調、<br>橄欖色或小麥色</div>
                                   <div class="box3">霧面的粉紅色</div>
                                   <div class="box3">柔和的焦茶色、深棕色，<br>眼白帶灰藍色</div>
                                   <div class="box3">柔和帶冷的玫瑰粉色</div>
                                </div>
                                <div class="col-2 right-section">
                                   <div class="box4">代表明星</div>
                                   <div class="box5">飾品</div>
                                </div>
                                <div class="col-2 right-section">
                                   <div class="box6">綾瀨遙、蒼井優、<br>李小璐、金雪炫、<br>福山雅治、小栗旬、<br>向井理、二宮和也</div>
                                   <div class="box7">啞光銀、鑽石、<br>水晶、寶石、<br>乳白珍珠、玻璃質</div>
                                </div>
                                <div class="col-4 right-section">
                                    <img class="Image" src="images/summer.png" alt="Description of the image" class="img-fluid">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1 right-section">
            </div>
        </div>
    </div>

    <!-- 第二區塊 -->
    <div class="container-fluid my-3 px-3">
        <p style="font-family: 'Inter';color: #000000;font-weight: 700; font-size: 20px;">根據測驗結果，為您推薦以下服裝單品：</p>
             <div class="row d-flex justify-content-center" id="myGoods" style="width:80%; height: 70%; margin: 0 auto;">        
             </div>
    </div>

<!-- 第三區塊 -->

<div class="container">
    <form id="orderForm" action="php/submit.php" method="POST">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center" style="font-size: 26px;font-weight: 700; color: #409FAC;">請問你最喜歡的衣服色彩？（輸入排序1-4）</h2>
            <br>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-3 col-md-3">
            <div class="image-item text-center">
                <input type="number" name="spring" min="1" max="4" data-id="1">
                <img src="images/sorting1.png" alt="Image 1">
            </div>
        </div>
        <div class="col-3 col-md-3">
            <div class="image-item text-center">
                <input type="number" name="summer" min="1" max="4" data-id="2">
                <img src="images/sorting2.png" alt="Image 2">
            </div>
        </div>
        <div class="col-3 col-md-3">
            <div class="image-item text-center">
                <input type="number" name="autumn" min="1" max="4" data-id="3">
                <img src="images/sorting3.png" alt="Image 3">
            </div>
        </div>
        <div class="col-3 col-md-3">
            <div class="image-item text-center">
                <input type="number" name="winter" min="1" max="4" data-id="4">
                <img src="images/sorting4.png" alt="Image 4">
            </div>
        </div>
    </div>
</div>
<button class="submit-btn" onclick="submitOrder()">提交</button>
    </form>
    
    <!-- 第四區塊 -->
     <div class="container-fluid block5">
        <div class="row">
            <div class="col-md-5 left-section">
            </div>

            <div class="col-md-5 center-section">
                <p class="p-4">四季更褶<br>Quatrefoil</p>
            </div>


            <div class="col-md-2 right-section">
            </div>
        </div>
    </div>

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
         let html = '<div class="col-3 mt-2">' +
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
<body>
</html>

