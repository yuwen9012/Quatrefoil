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
    <link rel="stylesheet" href="css/autumn.css">
    <link rel='stylesheet' type='text/css' href='./css/Navbar.css'>

    <title>autumn</title>
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
     <div class="container-fluid block1" style="background-color: #f3ddb3;">
        <div class="row">
            <div class="col-1 left-section">
            </div>
            <div class="col-10 center-section">
                <div class="box1">
                    <div class="row">
                        <div class="col-12-section">
                            <p class="t1">您的四季色彩類型：<span>秋季型</span></p>
                            <p class="t2">#穩重 #成熟 #大人系 #高級感</p>
                            <p class="t3">沉穩內斂、古典風🎻、知性溫暖、🍂🍂🍂、（大地色系代言人）、慵懶溫和、（看起來很成熟）、貴族氣息、本命奶茶色、秋日暖陽☀️</p>
                            <div class="row">
                                <div class="col-2 left-section">
                                   <div class="box2">膚色</div>
                                   <div class="box2">臉頰</div>
                                   <div class="box2">眼睛</div>
                                   <div class="box2">嘴唇</div>
                                </div>
                                <div class="col-2 left-section">
                                   <div class="box3" style="font-size: 14px;">皮膚基調偏暖色調，<br>常為象牙白、小麥色、暗駝色</div>
                                   <div class="box3">桃黃色，少紅暈</div>
                                   <div class="box3">深棕色、焦棕色，<br>眼白象牙色或略帶青藍</div>
                                   <div class="box3">稍暗的橘棕色</div>
                                </div>
                                <div class="col-2 right-section">
                                   <div class="box4">代表明星</div>
                                   <div class="box5">飾品</div>
                                </div>
                                <div class="col-2 right-section">
                                   <div class="box6">北川景子、安室奈美惠、<br>周子瑜、姜澀琪、<br>木村拓哉、相葉雅紀、<br>齊藤工、平井堅</div>
                                   <div class="box7">啞光銀、琥珀、<br>銅色、木質</div>
                                </div>
                                <div class="col-4 right-section">
                                    <img class="Image" src="images/autumn.png" alt="Description of the image" class="img-fluid">
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
            'name':'復古無袖拼接棉衫-大地混色',
            'price':549,
            'content':'秋日暖色🍂，展現文藝氣質嚴選高質...', 
            'image': 'images/autumn_good1.png'
        },
        {
            'name':'合身短袖棉T-紅棕色',
            'price':300,
            'content':'告別臃腫，重塑溫暖秋日風格🥰 合身...', 
            'image': 'images/autumn_good2.png'
        },
        {
            'name':'純色大學T-卡其綠色',
            'price':400,
            'content':'低調卻不失格調的學院風文青感📚', 
            'image': 'images/autumn_good3.png'
        },
        {
            'name':'寬鬆亞麻短袖襯衫-芥末黃',
            'price':400,
            'content':'打造夏日清爽型男🍃 輕盈透氣，舒適...', 
            'image': 'images/autumn_good4.png'
        },
        {
            'name':'寬鬆袖口反摺襯衫-亞麻原色',
            'price':599,
            'content':'🩵清新自然時尚指標🩷 舒適透氣...', 
            'image': 'images/autumn_good5.png'
        },
        {
            'name':'鈕扣側開衩收腰長裙',
            'price':450,
            'content':'💼優雅氣質，展現職場女性的魅力。', 
            'image': 'images/autumn_good6.png'
        },
        {
            'name':'丹寧百褶長裙-芥末黃',
            'price':650,
            'content':'💃 展現復古韻味，搭配短版上衣或...', 
            'image': 'images/autumn_good7.png'
        },
        {
            'name':'經典雪紡中線西裝短褲',
            'price':495,
            'content':'經典簡約，百搭實穿，日常通勤皆宜🚶‍♀️', 
            'image': 'images/autumn_good8.png'
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