<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>四季更褶 | 帳號</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="javascript/session.js"></script>
<script src="javascript/account_setting.js"></script>

<link rel="stylesheet" type="text/css" href="css/global.css">
<link rel="stylesheet" type="text/css" href="css/account_setting.css">

</head>
<body>
  
  <?php
    include ("navbar.php");
  ?>

  <main>
    <div>
      <span class="title">帳號設定</span><span id="email"></span>
    </div>

    <div class="option">
      <span class="option_text">修改密碼</span>
      <button id="revise_pwd" class="btn primary">修改密碼</button>
    </div>

    <form id="form" method="post">
      <input id="oldpwd" class="input_primary" type="password" placeholder="舊密碼" required />
      <input id="newpwd" class="input_primary" type="password" placeholder="新密碼" required />
      <input id="pwdConf" class="input_primary" type="password" placeholder="確認密碼" required />
      <div><span id="error_msg"></span></div>
      <input id="button" class="btn primary" type="submit" value="確認"/>
    </form>

    <div class="option">
      <span class="option_text">帳號登出</span>
      <form id="logout" method="post" action="../php/logout.php">
        <input class="btn danger" type="submit" value="登出"/>
      </form>
    </div>

  </main>

</body>
</html>