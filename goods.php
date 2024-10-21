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

    <title>商品資訊頁面</title>
    <link rel="stylesheet" href="css/goods.css">
</head>
<body>
    <div class="container-fluid my-5">
        <div class="row g-0">
            <!-- 左側：商品圖片 -->
            <div class="col-md-4">
                <img src="images/spring_good1.png" alt="浪漫印花短袖襯衫" class="img-fluid w-100 h-auto rounded">
            </div>

            <!-- 右側：商品資訊 -->
            <div class="col-md-8 d-flex flex-column justify-content-between p-4">
                <!-- 商品名稱：置於最上方 -->
                <div>
                    <h1 class="product-title mb-3">浪漫印花短袖襯衫</h1>
                </div>

                <!-- 商品描述與價格：各自有適當間距 -->
                <div class="d-flex flex-column justify-content-center flex-grow-1">
                    <h5 class="product-section-title mb-2">商品描述</h5>
                    <div class="product-description d-flex align-items-start mb-4"> <!-- 減少間距 -->
                        <img src="images/spring.png" alt="吉祥物" class="mascot-img me-2">
                        <p class="m-0 fw-bold">
                            展現清新氣質，打造不一樣的浪漫風格～<br>
                            合身剪裁，修飾身形，搭配經典款或休閒褲，展現你的時裝活力！
                        </p>
                    </div>

                    <div class="product-price text-danger fs-2 mt-3 mb-4">$499</div> <!-- 控制適當間距 -->
                </div>

                <!-- 商品標籤：置於最下方 -->
                <div>
                    <h5 class="product-section-title mb-2">標籤</h5>
                    <div class="product-tags">
                        <span class="badge bg-danger">春季</span>
                        <span class="badge bg-warning text-dark">秋季</span>
                        <span class="badge bg-info text-dark">日常</span>
                        <span class="badge bg-success">合身</span>
                        <span class="badge bg-primary">輕旅行</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
