<link rel="stylesheet" href="css/experiment.css">

<!-- 實驗區塊 -->
<div class="container-fluid" style="background-color: #ffffff; margin-top: 40px;">
    <form id="orderForm" action="php/submit.php" method="POST" style="margin: 0 auto; max-width: 800px; margin-top: 40px;">
    
    <!-- 綠 -->
    <div class="row">
        <div class="col-12">
            <h2 class="text-center" style="font-size: 26px;font-weight: 700; color: #409FAC;">哪種搭配看起來最協調？（輸入排序1-4）</h2>
            <br>
        </div>
    </div>
    <div class="row g-0" id="green-section">
        <div class="col-6 col-md-3 image-item" data-id="4">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #10A251; display: flex; position: relative;">
                <p class="color-text1">#10A251</p>
            </div>
            <input type="number" name="winter" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="2">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #029666; display: flex; position: relative;">
                <p class="color-text1">#029666</p>
            </div>
            <input type="number" name="summer" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="3">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #4C7028; display: flex; position: relative;">
                <p class="color-text1">#4C7028</p>
            </div>
            <input type="number" name="autumn" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="1">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #77C55F; display: flex; position: relative;">
                <p class="color-text1">#77C55F</p>
            </div>
            <input type="number" name="spring" min="1" max="4" style="margin-top: 16px;">
        </div>
    </div>
    <!-- 綠 -->
    <br><br><hr><br><br>  
    <!-- 紅 -->
    <div class="row g-0" id="red-section">
        <div class="col-6 col-md-3 image-item" data-id="4">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #941227; display: flex; position: relative;">
                <p class="color-text1">#941227</p>
            </div>
            <input type="number" name="winter" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="2">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #983F52; display: flex; position: relative;">
                <p class="color-text1">#983F52</p>
            </div>
            <input type="number" name="summer" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="3">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #B92015; display: flex; position: relative;">
                <p class="color-text1">#B92015</p>
            </div>
            <input type="number" name="autumn" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="1">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #E4513D; display: flex; position: relative;">
                <p class="color-text1">#E4513D</p>
            </div>
            <input type="number" name="spring" min="1" max="4" style="margin-top: 16px;">
        </div>
    </div>
    <!-- 紅 -->    
    <br><br><hr><br><br>
    <!-- 藍 -->
    <div class="row g-0" id="blue-section">
        <div class="col-6 col-md-3 image-item" data-id="4">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #2D3EA1; display: flex; position: relative;">
                <p class="color-text1">#2D3EA1</p>
            </div>
            <input type="number" name="winter" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="2">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #7AAAD7; display: flex; position: relative;">
                <p class="color-text1">#7AAAD7</p>
            </div>
            <input type="number" name="summer" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="3">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #357896; display: flex; position: relative;">
                <p class="color-text1">#357896</p>
            </div>
            <input type="number" name="autumn" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="1">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #63C5DB; display: flex; position: relative;">
                <p class="color-text1">#63C5DB</p>
            </div>
            <input type="number" name="spring" min="1" max="4" style="margin-top: 16px;">
        </div>
    </div>
    <!-- 藍 -->    
    <br><br><hr><br><br>
    <!-- 黃 -->
    <div class="row g-0" id="yellow-section">
        <div class="col-6 col-md-3 image-item" data-id="4">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #110C0B; display: flex; position: relative;">
                <p class="color-text1">#110C0B</p>
            </div>
            <input type="number" name="winter" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="2">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #6A6F89; display: flex; position: relative;">
                <p class="color-text1">#6A6F89</p>
            </div>
            <input type="number" name="summer" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="3">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #80302f; display: flex; position: relative;">
                <p class="color-text1">#80302F</p>
            </div>
            <input type="number" name="autumn" min="1" max="4" style="margin-top: 16px;">
        </div>
        <div class="col-6 col-md-3 image-item" data-id="1">
            <div class="face-container">
                <img src="images/user_face.jpg" alt="User Face" class="user-face">
            </div>
            <div style="width: 170px; height: 170px; background-color: #C49272; display: flex; position: relative;">
                <p class="color-text1">#C49272</p>
            </div>
            <input type="number" name="spring" min="1" max="4" style="margin-top: 16px;">
        </div>
    </div>
    <!-- 黃 -->    
    <br><br>    
    <button class="submit-btn" style="max-width: 300px;" onclick="submitOrder()">提交</button>
    </form>
</div>

<script>
    // Function to shuffle elements within a parent
    function shuffleElements(parent) {
        let items = parent.children;
        for (let i = items.length; i >= 0; i--) {
            parent.appendChild(items[Math.random() * i | 0]);
        }
    }

    // Shuffle sections
    shuffleElements(document.getElementById('green-section'));
    shuffleElements(document.getElementById('red-section'));
    shuffleElements(document.getElementById('blue-section'));
    shuffleElements(document.getElementById('yellow-section'));
</script>
