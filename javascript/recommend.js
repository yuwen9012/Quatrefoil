function createProductCard(product) {
    return `
        <div class="col">
            <div class="card h-100 product-card p-0">
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

document.addEventListener('DOMContentLoaded', function() {
    const recommend_products = document.getElementById('recommend_products');
    fetch('php/recommend.php', {
        method: "POST",
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({'referer': window.location.pathname})
    })
    .then(response => response.json())
    .then(response => {
        let state= response.state;
        if (state) {
            recommend_products.innerHTML = '';
            let products= response.products;
            products.forEach(product => {
                recommend_products.innerHTML += createProductCard(product);
            });
        } else {
            const recommend_container= document.getElementById('recommend_container');
            recommend_container.textContent= '';
            recommend_container.style.display= 'none';
        }
    })
    .catch(error => console.error('Error Fetch: ', error));
});

