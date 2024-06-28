<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>四季更褶 | 登入</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../javascript/session.js"></script>
<script src="../javascript/login.js"></script>

<link rel='stylesheet' type='text/css' href='../CSS/global.css'>
<link rel='stylesheet' type='text/css' href='../CSS/login.css'>
<link rel='stylesheet' type='text/css' href='../CSS/login_rwd.css'>

</head>

<body>

  <?php
    include ("navbar.php");
  ?>
  
  <main>

    <div class='login_contain'>
      <h3>快速登入</h3>
    
      <div class="social_login">
        <button class="btn_social_login"><img src="../images/icon/facebook.png" width="20px" height="20px"/>Facebook登入</button>
        <button class="btn_social_login"><img src="../images/icon/google.png" width="20px" height="20px"/>Google登入</button>
      </div>
      
      <div class="seperate">
        <div class="line"></div>
        <span>or</span>
        <div class="line"></div>
      </div>
      
      <h3>電子郵件登入</h3>
      <form method="post" id="form">
        <input class="input_primary" id="email" placeholder="email" required/>
        <input class="input_primary" id="userpwd" type="password" placeholder="密碼" required/>
        <div><span id="error_msg"></span></div>
        <input class="btn primary" value="登入" type="submit"/>
      </form>
      
      <div class="hint">
        <a id="forget" href="forget_pwd.php">忘記密碼</a>
      </div>

    </div>
      
    <div class="register">
      <h3>還沒有帳號嗎?</h3>
      <div>註冊會員免費享有以下功能</div>
      <ul>
        <li>四季衣櫃</li>
        <li>四季論壇</li>
        <li>四季測驗服裝推薦</li>
      </ul>
      <button id="go_register" class="btn primary" onclick="locat_register()">去註冊</button>
    </div>
  
  </main>
  
</body>
</html>