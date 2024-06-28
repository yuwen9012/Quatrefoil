<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>四季更褶 | 登入</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../javascript/session.js"></script>
<script src="../javascript/forget_pwd.js"></script>

</head>
<body>

  <?php
    include ("navbar.php");
  ?>

  <main>
    <div class="content">
      <h3>忘記密碼</h3>
      <p>請輸入註冊帳號的電子郵件，將發送重設密碼郵件</p>
      <form id="form" method="post" action="#">
      	<input id="email" name="email" placeholder="email" required/>
        <input type="submit" value="發送電子郵件"/>
        <div id="error_msg"></div>
      </form>
  	</div>
  	<div class="hint">
        <a id="href_login" href="login.php">返回登入頁</a>
    </div>

  </main>

</body>
</html>