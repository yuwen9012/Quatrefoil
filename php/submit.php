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
    $winter_1 = $_POST['winter_1'];
    $summer_1 = $_POST['summer_1'];
    $autumn_1 = $_POST['autumn_1'];
    $spring_1 = $_POST['spring_1'];
    $winter_2 = $_POST['winter_2'];
    $summer_2 = $_POST['summer_2'];
    $autumn_2 = $_POST['autumn_2'];
    $spring_2 = $_POST['spring_2'];
    $winter_3 = $_POST['winter_3'];
    $summer_3 = $_POST['summer_3'];
    $autumn_3 = $_POST['autumn_3'];
    $spring_3 = $_POST['spring_3'];
    $winter_4 = $_POST['winter_4'];
    $summer_4 = $_POST['summer_4'];
    $autumn_4 = $_POST['autumn_4'];
    $spring_4 = $_POST['spring_4'];


    // 插入数据到数据库表中
    $sql = "INSERT INTO test_sorting (winter_1, summer_1, autumn_1, spring_1, winter_2, summer_2, autumn_2, spring_2, winter_3, summer_3, autumn_3, spring_3, winter_4, summer_4, autumn_4, spring_4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db_link->prepare($sql);
    
    // 绑定参数
    $stmt->bind_param("iiiiiiiiiiiiiiii", $winter_1, $summer_1, $autumn_1, $spring_1, $winter_2, $summer_2, $autumn_2, $spring_2, $winter_3, $summer_3, $autumn_3, $spring_3, $winter_4, $summer_4, $autumn_4, $spring_4);

    // 执行查询
    if ($stmt->execute()) {
         header("Location: experiment.php");
    } else {
        echo "插入数据时出错: " . $stmt->error;
    }

    // 关闭连接
    $stmt->close();
    $db_link->close();
}
?>
