// 分頁變數
const itemsPerPage = 16; // 每頁顯示的商品數量
let currentPage = 1; // 當前頁
let products = []; // 全部商品數據

// 創建商品縮圖卡
function createProductCard(product) {
    return `
        <div class="col">
            <div class="card h-100 product-card">
            <a class="link" href="product_info.php?id=${product.id}" target="_blank" rel="noopener noreferrer">
                <img src="${product.image_path}" class="card-img-top" alt="${product.name}">
                <div class="card-body">
                    <h5 class="card-title">${product.name}</h5>
                    <p class="card-price">$${product.price}</p>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <span class="float-end cart-icon"><i class="bi bi-t-shirt"></i></span>
                </div>
            </a>
            </div>
        </div>
    `;
}

// Render products for the current page
function renderProducts() {
    const productGrid = document.getElementById('productGrid');
    productGrid.innerHTML = ''; // 清空當前的商品
    // 計算當前頁的起始和結束索引
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const productsToShow = products.slice(start, end);

    // 插入商品
    productsToShow.forEach(product => {
        productGrid.innerHTML += createProductCard(product);
    });
}

// 設置換頁功能按鈕
function renderPagination() {
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = ''; // 清空當前的分頁按鈕
    const totalPages = Math.ceil(products.length / itemsPerPage);

    // 設定最多顯示的頁碼數，例如 5 個頁碼
    const maxVisiblePages = 5;
    let startPage, endPage;

    // 計算顯示的頁碼範圍
    if (totalPages <= maxVisiblePages) {
        // 如果總頁數少於或等於 maxVisiblePages，則顯示所有頁碼
        startPage = 1;
        endPage = totalPages;
    } else {
        // 如果總頁數大於 maxVisiblePages，則顯示部分頁碼
        if (currentPage <= Math.floor(maxVisiblePages / 2)) {
            startPage = 1;
            endPage = maxVisiblePages;
        } else if (currentPage + Math.floor(maxVisiblePages / 2) >= totalPages) {
            startPage = totalPages - maxVisiblePages + 1;
            endPage = totalPages;
        } else {
            startPage = currentPage - Math.floor(maxVisiblePages / 2);
            endPage = currentPage + Math.floor(maxVisiblePages / 2);
        }
    }

    // 創建上一頁按鈕
    if (currentPage > 1) {
        pagination.innerHTML += `
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous" onclick="changePage(${currentPage - 1})">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        `;
    }

    // 創建頁面按鈕
    if (startPage > 1) {
        // 如果開始頁大於 1，顯示第一頁和省略號
        pagination.innerHTML += `
            <li class="page-item"><a class="page-link" href="#" onclick="changePage(1)">1</a></li>
            <li class="page-item disabled"><span class="page-link">...</span></li>
        `;
    }

    for (let i = startPage; i <= endPage; i++) {
        pagination.innerHTML += `
            <li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
            </li>
        `;
    }

    if (endPage < totalPages) {
        // 如果結束頁小於總頁數，顯示省略號和最後一頁
        pagination.innerHTML += `
            <li class="page-item disabled"><span class="page-link">...</span></li>
            <li class="page-item"><a class="page-link" href="#" onclick="changePage(${totalPages})">${totalPages}</a></li>
        `;
    }

    // 創建下一頁按鈕
    if (currentPage < totalPages) {
        pagination.innerHTML += `
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next" onclick="changePage(${currentPage + 1})">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        `;
    }
}

// 換頁動作
function changePage(page) {
    currentPage = page;
    renderProducts();
    renderPagination();
}

// 加載商品資訊
document.addEventListener('DOMContentLoaded', function() {
    var paramsObj={};
    var urlParams= new URLSearchParams(window.location.search);

    if (!urlParams.has('gender') || !urlParams.has('type')){
        window.location.href='mall.php?gender=女裝&type=短袖';
    }

    function set_tag(name){
        if (urlParams.has(name)){
            const checkboxes= document.querySelectorAll(`input[name=${name}]`);
            let paramArr= urlParams.get(name).split('-');
            checkboxes.forEach((checkbox) => {
                if (paramArr.includes(checkbox.value)){
                    checkbox.checked=true;
                }
            });
        }
    }
    set_tag('season');
    set_tag('style');
    set_tag('pattern');
    set_tag('material');

    if (urlParams.has('min_price')){
        const min_price= urlParams.get('min_price');
        document.getElementById('min_price').value= min_price;
    }

    if (urlParams.has('max_price')){
        const max_price= urlParams.get('max_price');
        document.getElementById('max_price').value= max_price;
    }

    if (urlParams.has('order')) {
        const order= urlParams.get('order');
        if (order == 'asc') {
            document.getElementById('btn_sort').textContent='價格:低到高';
        } else if (order == 'desc') {
            document.getElementById('btn_sort').textContent='價格:高到低';
        }
    }

    function get_params(name){
        if (urlParams.has(name)){
            paramsObj[name]= urlParams.get(name);
        }
    }
    get_params('gender');
    get_params('type');
    get_params('season');
    get_params('style');
    get_params('pattern');
    get_params('material');
    get_params('min_price');
    get_params('max_price');
    get_params('order');

    fetch('php/get-products.php', {
        method: "POST",
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(paramsObj)
    })
        .then(response => response.json())
        .then(data => {
            let state= data.state;
            products = data.products; // 保存所有商品數據

            if (state){
                renderProducts(); // 顯示當前頁的商品
                renderPagination(); // 顯示分頁按鈕
            }
        })
        .catch(error => console.error('Error fetching products:', error));
});

document.addEventListener('DOMContentLoaded', function() {
    // 男裝
    var btnMenswear = document.getElementById('btnMenswear');
    var collapseMenswear = document.getElementById('collapseMenswear');

    if (btnMenswear && collapseMenswear) {
        btnMenswear.addEventListener('click', function() {
            // 切換顯示和隱藏效果
            if (collapseMenswear.style.display === 'none' || collapseMenswear.style.display === '') {
                collapseMenswear.style.display = 'block'; // 顯示選單
            } else {
                collapseMenswear.style.display = 'none'; // 隱藏選單
            }
        });
    }

    // 女裝
    var btnWomenswear = document.getElementById('btnWomenswear');
    var collapseWomenswear = document.getElementById('collapseWomenswear');

    if (btnWomenswear && collapseWomenswear) {
        btnWomenswear.addEventListener('click', function() {
            // 切換顯示和隱藏效果
            if (collapseWomenswear.style.display === 'none' || collapseWomenswear.style.display === '') {
                collapseWomenswear.style.display = 'block'; // 顯示選單
            } else {
                collapseWomenswear.style.display = 'none'; // 隱藏選單
            }
        });
    }

    // 頂端選單-男裝
    var topBtnMenswear = document.getElementById('topBtnMenswear');
    var topCollapseMenswear = document.getElementById('topCollapseMenswear');
    if (topBtnMenswear && topCollapseMenswear) {
        topBtnMenswear.addEventListener('click', function() {
            if (topCollapseMenswear.style.display == 'none' || topCollapseMenswear.style.display =='') {
                topBtnMenswear.style.borderRadius = '8px 8px 0px 0px';
                topCollapseMenswear.style.display = 'block';
            } else {
                topBtnMenswear.style.borderRadius = '8px';
                topCollapseMenswear.style.display = 'none';
            }
        });
    }

    // 頂端選單-女裝
    var topBtnWomenswear = document.getElementById('topBtnWomenswear');
    var topCollapseWomenswear = document.getElementById('topCollapseWomenswear');
    if (topBtnWomenswear && topCollapseWomenswear) {
        topBtnWomenswear.addEventListener('click', function() {
            if (topCollapseWomenswear.style.display == 'none' || topCollapseWomenswear.style.display =='') {
                topBtnWomenswear.style.borderRadius = '8px 8px 0px 0px';
                topCollapseWomenswear.style.display = 'block';
            } else {
                topBtnWomenswear.style.borderRadius = '8px';
                topCollapseWomenswear.style.display = 'none';
            }
        });
    }

    // 篩選器開啟
    var btn_filter= document.getElementById("btn_filter");
    if (btn_filter){
        btn_filter.addEventListener('click', function () {
            var filter= document.getElementById("filter");
            filter.style.display="block";
        });
    }

    // 篩選器關閉
    var filter_cancel= document.getElementById("filter_cancel");
    if (filter_cancel){
        filter_cancel.addEventListener('click', function () {
            var filter= document.getElementById("filter");
            filter.style.display="none";
        });
    }

    // 送出篩選條件
    var filterForm= document.getElementById("filterForm");
    filterForm.addEventListener("submit", function (event) {
        event.preventDefault();
        const url= new URL(window.location.href);
        let urlParams= new URLSearchParams(url.search);

        const gender= urlParams.get('gender');
        const type= urlParams.get('type');
        if (!gender || !type){
            window.location.href='mall.php?gender=女裝&type=短袖';
        }

        function create_search_param(checkboxes, paramName){
            if (checkboxes.length>0) {
                let paramArr=[]
                checkboxes.forEach((checkbox) => {
                    paramArr.push(checkbox.value);
                });
                const paramStr= paramArr.join('-');
                urlParams.set(paramName, paramStr);
            } else {
                urlParams.delete(paramName);
            } 
        }

        const season= document.querySelectorAll('input[name="season"]:checked');
        const style= document.querySelectorAll('input[name="style"]:checked');
        const pattern= document.querySelectorAll('input[name="pattern"]:checked');
        const material= document.querySelectorAll('input[name="material"]:checked');
        create_search_param(season, 'season');
        create_search_param(style, 'style');
        create_search_param(pattern, 'pattern');
        create_search_param(material, 'material');
        
        const min_price= document.getElementById('min_price').value;
        const max_price= document.getElementById('max_price').value;
        if (min_price !="") {
            urlParams.set('min_price', min_price);
        } else

        if (max_price !="") {
            urlParams.set('max_price', max_price);
        }

        window.location.href= `${url.origin}${url.pathname}?${urlParams.toString()}`;
    });

    // 依價格排序
    var btn_sort= document.getElementById('btn_sort');
    btn_sort.addEventListener("click", function() {
        const url= new URL(window.location.href);
        let urlParams= new URLSearchParams(url.search);

        const gender= urlParams.get('gender');
        const type= urlParams.get('type');
        if (!gender || !type){
            window.location.href='mall.php?gender=女裝&type=短袖';
        }

        const order= urlParams.get('order');

        if (!order){
            urlParams.set('order', 'asc');
        } else if (order == 'asc'){
            urlParams.set('order', 'desc');
        } else if (order == 'desc') {
            urlParams.delete('order');
        } else {
            urlParams.set('order', 'asc');
        }

        window.location.href= `${url.origin}${url.pathname}?${urlParams.toString()}`;
    }); 
});