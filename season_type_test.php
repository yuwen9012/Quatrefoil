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

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/season_type_test.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="javascript/season_type_test.js"></script>
    
    <title>四季色彩測驗</title>
</head>
<body>

  <div id='loading_animation'>
      <img src="images/icon/loading.gif" alt="正在分析四季色中...">
  </div>
  <?php 
    include('navbar.php');
  ?>

     <!-- 第一區塊 -->
  <div class="container-fluid block" style="background-color: #409FAC;">
    <br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-2 col-sm-1 col-1 left-section">
        </div>
        <div class="col-md-4 col-sm-10 col-10 center-section">
            <p class="t1">-基本條件設定-</p>
            
            <form id="settingsForm" method="post">
                <div class="box1-2">
                    <p class="p1-1">男</p>
                    <p class="p1-2">女</p>
                    <label>
                        <input type="radio" class="btn" name="gender" value="1" required>
                        <span class="custom-btn"></span>
                    </label>
                    <label>
                        <input type="radio" class="btn" name="gender" value="0">
                        <span class="custom-btn"></span>
                    </label>
                </div>
                <br>
                <div class="box1-2">
                    <p class="p1-3">無變色片</p>
                    <p class="p1-4">有變色片</p>
                    <label>
                        <input type="radio" class="btn" name="lenses" value="1" required>
                        <span class="custom-btn1"></span>
                    </label>
                    <label>
                        <input type="radio" class="btn" name="lenses" value="0">
                        <span class="custom-btn1"></span>
                    </label>
                </div>
                <br>
                <div class="box1-2">
                    <p class="p1-5">無染髮</p>
                    <p class="p1-6">有染髮</p>
                    <label>
                        <input type="radio" class="btn" name="hair_dying" value="1" required>
                        <span class="custom-btn2"></span>
                    </label>
                    <label>
                        <input type="radio" class="btn" name="hair_dying" value="0">
                        <span class="custom-btn2"></span>
                    </label>
                </div>
                <br>
            </form>
        </div>

        <div class="col-md-5 col-sm-12 col-12 center-section">
            <p class="t2">-AI臉部辨識分析-</p>
            <div class="box1-1">
                <form id="uploadForm" enctype="multipart/form-data" method="post" action="/upload-photo">
                    <input type="file" name="photo" id="photo" accept="image/jpeg,image/png" required style="display: none;">
                    <label for="photo">
                        <img class="Image1-2" src="images/test_new2.png" alt="Description of the image" class="img-fluid">
                    </label>
                    <button class="button-upload" type="submit">上傳照片！</button>
                </form>
            </div>
            <p class="t3">上傳圖片獲取您的四季色判定！</p>
        </div>
        <div class="col-md-1 col-sm-1 col-1 left-section">
        </div>
    </div>
    <br><br><br>
</div>

     <!-- 第二區塊 -->
     <div class="container-fluid block2">
        <br><br>
        <div class="row">
            <div class="col-sm-1">
                <img class="Image2-1" src="images/test_new3.png" alt="Description of the image" class="img-fluid">
            </div>
            <div class="col-sm-10">
                <div class="box2-2">
                    <div class="row">
                        <div class="col-sm-1">
                            <img class="Image2-3" src="images/test_new5.png" alt="Description of the image" class="img-fluid">

                        </div>
                        <div class="col-sm-10">
                         <p class="p2-1">✨ 你知道嗎？你的專屬色調藏在你的DNA裡！✨<br><br>韓國歐巴歐膩都在瘋玩的「四季色分析」，現在換你來測測看！<br>不必飛韓國，只要上傳你在自然光源下的清晰照片，系統將會根據你的膚色、瞳色、原生髮色、臉頰和唇色，分析你的命定色系<br><br>
                            為什麼要測四季色？<br><br>因為每個人天生膚色和血液中的黑色素、血紅素、胡蘿蔔素都不一樣，所以適合的顏色也不同！<br>找到對的顏色，讓你氣色紅潤、膚色均勻，整個人都亮起來！<br>四季色型態分為「春季型」、「夏季型」、「秋季型」、「冬季型」四種，幫你找出最適合你的明度、彩度、色相和清濁度。<br>想知道自己是哪一型嗎？快來試試看，和歐巴歐膩一起變身時尚達人吧！</p>
                        </div>
                        <div class="col-sm-1">
                            <img class="Image2-4" src="images/test_new6.png" alt="Description of the image" class="img-fluid">
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-sm-1">
                <img class="Image2-2" src="images/test_new4.png" alt="Description of the image" class="img-fluid">
            </div>
           </div>
           <br><br>
        </div>

    <!-- 第三區塊 -->
    <div class="container-fluid block5">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
                <p class="p-5">四季更褶<br>Quatrefoil</p>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
