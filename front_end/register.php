<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>四季更褶 | 註冊</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../javascript/session.js"></script>
<script src="../javascript/register.js"></script>

<link rel='stylesheet' type='text/css' href='../CSS/global.css'>
<link rel='stylesheet' type='text/css' href='../CSS/register.css'>

</head>
<body>
  
  <?php
    include ("navbar.php");
  ?>

<main>  
  <div class='contain'>
      <h3>快速註冊</h3>
    
      <div class="social_login">
        <button class="btn_social_login"><img src="../images/icon/facebook.png" width="20px" height="20px"/>Facebook註冊</button>
        <button class="btn_social_login"><img src="../images/icon/google.png" width="20px" height="20px"/>Google註冊</button>
      </div>
      
      <div class="seperate">
        <div class="line"></div>
        <span>or</span>
        <div class="line"></div>
      </div>
      
      <h3>電子郵件註冊</h3>
      <form id="form" method="post" action="create_account.php">
        <input id="email" name="email" placeholder="email" required/>
        <input id="userpwd" name="userpwd" type="password" placeholder="請輸入長度6-30位之間密碼" required/>
        <input id="pwdConf" type="password" placeholder="確認密碼" required/>
        <div><span id="error_msg"></span></div>
        <input class="btn primary" value="確認註冊" type="submit"/>
        <p id="result"></p>
      </form>
      
      <div class="hint">
        已有帳號? <a id="forget" href="login.php">登入</a>
      </div>

    </div>
</main>
  
</body>
</html>