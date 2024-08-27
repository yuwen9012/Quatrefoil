<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' type='text/css' href='css/navbar.css'>

<script>
    function toggleMenu() {
        var navCenter = document.querySelector('.nav_center');
        navCenter.classList.toggle('active');
    }
</script>


</head>

<nav>
    <div class='nav_brand'>
      <a href="home.php"><img src="images/icon/brand.png"/></a>
    </div>
    <div class='nav_center'>
      <a href="season_type_test.php"><span>四季色彩分析</span></a>
      <a href="#"><span>四季商城</span></a>
    </div>
    <div class='nav_right'>
    <a href="account_setting.php"><img src="images/icon/user.png" width="23px" height="23px"/></a>
    <!-- 漢堡選單按鈕 -->
    <div id="ham_menu" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
  </nav>

</html>