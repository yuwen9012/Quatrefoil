<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>四季更褶 | 首頁</title>

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.2/dist/bootstrap-table.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- 自訂 CSS -->
    <link rel="stylesheet" type='text/css' href="css/mall.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Bootstrap Table -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.2/dist/bootstrap-table.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.2/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>

    <!-- 自訂 JS -->
    <script type="text/javascript" src="javascript/mall.js"></script>
</head>
<body>
    <?php include "navbar.php" ?><br>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <!-- 男裝按鈕 -->
                    <button class="btn_men" type="button" id="btnMenswear">
                        男裝
                    </button>
                    <!-- 男裝折疊內容 -->
                    <div id="collapseMenswear" class="menu-content" style="display: none;">
                        <ul class="nav flex-column ms-3">
                            <li class="item"><a class="nav-link" href="#">短袖</a></li>
                            <li class="item"><a class="nav-link" href="#">長袖</a></li>
                            <li class="item"><a class="nav-link" href="#">短褲</a></li>
                            <li class="item"><a class="nav-link" href="#">長褲</a></li>
                            <li class="item"><a class="nav-link" href="#">套裝</a></li>
                        </ul>
                    </div>

                    <!-- 女裝按鈕 -->
                    <button class="btn_woman mt-3" type="button" id="btnWomenswear">
                        女裝
                    </button>
                    <!-- 女裝折疊內容 -->
                    <div id="collapseWomenswear" class="menu-content" style="display: none;">
                        <ul class="nav flex-column ms-3">
                            <li class="item"><a class="nav-link" href="#">短袖</a></li>
                            <li class="item"><a class="nav-link" href="#">長袖</a></li>
                            <li class="item"><a class="nav-link" href="#">短褲</a></li>
                            <li class="item"><a class="nav-link" href="#">長褲</a></li>
                            <li class="item"><a class="nav-link" href="#">套裝</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="input-group me-2">  
                            <button class="btn btn-outline-secondary" type="button_filter">
                                篩選
                            </button>
                            <button class="btn btn-outline-secondary" type="button_">
                                排序
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product grid -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="productGrid">
                    <!-- Product cards will be dynamically inserted here -->
                </div>
            </main>
        </div>
    </div>

    <br>

    <!-- Pagination -->
    <div class="container">
        <ul class="pagination d-flex justify-content-end" id="pagination">
            <!-- Pagination buttons will be dynamically inserted here -->
        </ul>
    </div>
</body>
</html>




