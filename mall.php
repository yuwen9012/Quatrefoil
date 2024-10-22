<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>四季更褶 | 商城</title>

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

    <!-- 篩選器 -->
    <div id="filter">
        <div id="filter_content">
            <form id="filterForm">
                <div class="filter_menu">
                    <div><img src="images/icon/filter.png" width="25px" height="25px">篩選</div>
                    <div id="filter_cancel"><img src="images/icon/cancel.png" width="23px" height="23px"></div>
                </div>
                <div>
                    <div class="filter_label">依四季色</div>
                    <div class="filter_tag">
                        <label>
                            <input type="checkbox" name="season" value="spring"> 
                            <span class="tag tag-spring">春季</span>
                        </label>
                        <label>
                            <input type="checkbox" name="season" value="summer"> 
                            <span class="tag tag-summer">夏季</span>
                        </label>
                        <label>
                            <input type="checkbox" name="season" value="autumn"> 
                            <span class="tag tag-autumn">秋季</span>
                        </label>
                        <label>
                            <input type="checkbox" name="season" value="winter"> 
                            <span class="tag tag-winter">冬季</span>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="filter_label">依風格</div>
                    <div class="filter_tag">
                        <label>
                            <input type="checkbox" name="style" value="日常"> 
                            <span class="tag">日常</span>
                        </label>
                        <label>
                            <input type="checkbox" name="style" value="正式"> 
                            <span class="tag">正式</span>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="filter_label">依版型</div>
                    <div class="filter_tag">
                        <label>
                            <input type="checkbox" name="pattern" value="寬鬆"> 
                            <span class="tag">寬鬆</span>
                        </label>
                        <label>
                            <input type="checkbox" name="pattern" value="合身"> 
                            <span class="tag">合身</span>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="filter_label">依材質</div>
                    <div class="filter_tag">
                        <label>
                            <input type="checkbox" name="material" value="棉花"> 
                            <span class="tag">棉</span>
                        </label>
                        <label>
                            <input type="checkbox" name="material" value="亞麻"> 
                            <span class="tag">亞麻</span>
                        </label>
                        <label>
                            <input type="checkbox" name="material" value="丹寧"> 
                            <span class="tag">丹寧</span>
                        </label>
                        <label>
                            <input type="checkbox" name="material" value="皮革"> 
                            <span class="tag">皮革</span>
                        </label>
                        <label>
                            <input type="checkbox" name="material" value="針織"> 
                            <span class="tag">針織</span>
                        </label>
                        <label>
                            <input type="checkbox" name="material" value="雪紡"> 
                            <span class="tag">雪紡</span>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="filter_label">依價格</div>
                    <div class="filter_tag">
                        <input type="number" id="min_price">
                        <span>到</span>
                        <input type="number" id="max_price">
                    </div>
                </div>
                <div>
                    <input type="reset" value="清空">
                    <input type="submit" value="確認">  
                </div>
            </form>
        </div>
    </div>

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
                            <li class="item"><a class="nav-link" href="mall.php?gender=男裝&type=短袖">短袖</a></li>
                            <li class="item"><a class="nav-link" href="mall.php?gender=男裝&type=長袖">長袖</a></li>
                            <li class="item"><a class="nav-link" href="mall.php?gender=男裝&type=短褲">短褲</a></li>
                            <li class="item"><a class="nav-link" href="mall.php?gender=男裝&type=長褲">長褲</a></li>
                            <li class="item"><a class="nav-link" href="mall.php?gender=男裝&type=套裝">套裝</a></li>
                        </ul>
                    </div>

                    <!-- 女裝按鈕 -->
                    <button class="btn_woman mt-3" type="button" id="btnWomenswear">
                        女裝
                    </button>
                    <!-- 女裝折疊內容 -->
                    <div id="collapseWomenswear" class="menu-content" style="display: none;">
                        <ul class="nav flex-column ms-3">
                            <li class="item"><a class="nav-link" href="mall.php?gender=女裝&type=短袖">短袖</a></li>
                            <li class="item"><a class="nav-link" href="mall.php?gender=女裝&type=長袖">長袖</a></li>
                            <li class="item"><a class="nav-link" href="mall.php?gender=女裝&type=短褲">短褲</a></li>
                            <li class="item"><a class="nav-link" href="mall.php?gender=女裝&type=長褲">長褲</a></li>
                            <li class="item"><a class="nav-link" href="mall.php?gender=女裝&type=套裝">套裝</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-nowrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                    <div class="top-collapse d-flex d-block d-md-none">
                        <!-- 男裝按鈕 -->
                        <div class="top-collapse-menu-men">
                            <button class="top-menu-btn" type="button" id="topBtnMenswear">男裝</button>
                            <!-- 男裝折疊內容 -->
                            <div id="topCollapseMenswear" class="top-menu-content" style="display: none;">
                                <ul class="nav flex-column ms-3">
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=男裝&type=短袖">短袖</a></li>
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=男裝&type=長袖">長袖</a></li>
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=男裝&type=短褲">短褲</a></li>
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=男裝&type=長褲">長褲</a></li>
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=男裝&type=套裝">套裝</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- 女裝按鈕 -->
                        <div class="top-collapse-menu-women">
                            <button class="top-menu-btn" type="button" id="topBtnWomenswear">女裝</button>
                            <!-- 女裝折疊內容 -->
                            <div id="topCollapseWomenswear" class="top-menu-content" style="display: none;">
                                <ul class="nav flex-column ms-3">
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=女裝&type=短袖">短袖</a></li>
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=女裝&type=長袖">長袖</a></li>
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=女裝&type=短褲">短褲</a></li>
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=女裝&type=長褲">長褲</a></li>
                                    <li class="top-item"><a class="nav-link" href="mall.php?gender=女裝&type=套裝">套裝</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="input-group me-2">  
                            <button id="btn_filter" class="btn btn-outline-secondary" type="button_filter">
                                篩選
                            </button>
                            <button id="btn_sort" class="btn btn-outline-secondary" type="button_">
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

    <?php include "footer.php" ?>
</body>
</html>




