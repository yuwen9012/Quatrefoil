<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>四季更褶 | 登入</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="javascript/session.js"></script>
<script src="javascript/forget_pwd.js"></script>

<link rel='stylesheet' type='text/css' href='css/global.css'>
<link rel='stylesheet' type='text/css' href='css/forget_pwd.css'>

</head>
<body>

  <?php
    include ("navbar.php");
  ?>

  <main>
    <div class="content">
      <h3>忘記密碼</h3>
      <p>請輸入註冊帳號的電子郵件，將發送重設密碼郵件</p>
      <form id="form" method="post" action="php/forgetpassword.php">
      	<input class="input_primary" id="email" name="email" placeholder="email" required/>
        <input class="btn primary" type="submit" value="發送電子郵件"/>
        <div id="error_msg"></div>
      </form>
      <div class="hint">
        <a class="link" href="login.php">回登入頁</a>
      </div>
  	</div>
  	

  </main>

</body>
</html>