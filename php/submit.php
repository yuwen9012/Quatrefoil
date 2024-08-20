<?php
// 连接数据库
include("connect.php");

// 选择数据库
$select_db = mysqli_select_db($db_link, "quatrefoil");
if (!$select_db) {
    $response['state'] = False;
    $response['msg'] = "發生錯誤，請稍後再試(db)";
} else {
    // 获取表单数据
    $spring = $_POST['spring'];
    $summer = $_POST['summer'];
    $autumn = $_POST['autumn'];
    $winter = $_POST['winter'];

    // 插入数据到数据库表中
    $sql = "INSERT INTO test_sorting (spring, summer, autumn, winter) VALUES (?, ?, ?, ?)";
    $stmt = $db_link->prepare($sql);
    
    // 绑定参数
    $stmt->bind_param("iiii", $spring, $summer, $autumn, $winter);

    // 执行查询
    if ($stmt->execute()) {
         header("Location: test_new.php");
    } else {
        echo "插入数据时出错: " . $stmt->error;
    }

    // 关闭连接
    $stmt->close();
    $db_link->close();
}
?>