    // 分頁變數
    const itemsPerPage = 16; // 每頁顯示的商品數量
    let currentPage = 1; // 當前頁
    let products = []; // 全部商品數據

    // Function to create product cards
    function createProductCard(product) {
        return `
            <div class="col">
                <div class="card h-100 product-card">
                    <img src="${product.image_path}" class="card-img-top" alt="${product.name}">
                    <div class="card-body">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="card-price">$${product.price}</p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <span class="float-end cart-icon"><i class="bi bi-t-shirt"></i></span>
                    </div>
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

    // Render pagination buttons
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

    // Change to a different page
    function changePage(page) {
        currentPage = page;
        renderProducts();
        renderPagination();
    }

    // Fetch products and initialize pagination
    document.addEventListener('DOMContentLoaded', () => {
        // Fetch data from PHP file
        fetch('php/get-products.php')
            .then(response => response.json())
            .then(data => {
                products = data; // 保存所有商品數據
                renderProducts(); // 顯示當前頁的商品
                renderPagination(); // 顯示分頁按鈕
            })
            .catch(error => console.error('Error fetching products:', error));
    });

// 男裝按鈕點擊事件
document.addEventListener('DOMContentLoaded', function() {
    var btnMenswear = document.getElementById('btnMenswear');
    var collapseMenswear = document.getElementById('collapseMenswear');

    // 確保元素非空並添加事件監聽器
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
});

// 裝按鈕點擊事件
document.addEventListener('DOMContentLoaded', function() {
    var btnMenswear = document.getElementById('btnWomenswear');
    var collapseMenswear = document.getElementById('collapseWomenswear');

    // 確保元素非空並添加事件監聽器
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
});