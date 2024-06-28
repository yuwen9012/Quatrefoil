<?php
include("connect.php");
// 設置HTTP頭為HTML格式，並指定編碼為UTF-8
header("Content-type: text/html; charset=utf-8");

// 選擇資料庫
$slcab = mysqli_select_db($db_link, "quatrefoil");

if ($db_link->connect_error) {
    die("連接失敗: " . $db_link->connect_error);
}

// 獲取表單提交的數據
$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];
$Q6 = $_POST["Q6"];
$Q7 = $_POST["Q7"];
$Q8 = $_POST["Q8"];
$Q9 = $_POST["Q9"];
$Q10 = $_POST["Q10"];
$Q11 = $_POST["Q11"];
$Q12 = $_POST["Q12"];
$Q13 = $_POST["Q13"];
$Q14 = $_POST["Q14"];
$Q15 = $_POST["Q15"];
$Q16 = $_POST["Q16"];
$Q17 = $_POST["Q17"];
$Q18 = $_POST["Q18"];
$Q19 = $_POST["Q19"];
$Q20 = $_POST["Q20"];
$Q21 = $_POST["Q21"];
$Q22 = $_POST["Q22"];
$Q23 = $_POST["Q23"];
$Q24 = $_POST["Q24"];
$Q25 = $_POST["Q25"];
$Q26 = $_POST["Q26"];
$Q27 = $_POST["Q27"];
$Q28 = $_POST["Q28"];
$Q29 = $_POST["Q29"];
$Q30 = $_POST["Q30"];

// 準備並綁定
$stmt = $db_link->prepare("
    INSERT INTO 4seasonquiz 
    (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, 
     Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, 
     Q21, Q22, Q23, Q24, Q25, Q26, Q27, Q28, Q29, Q30) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");
if (!$stmt) {
    die("準備語句失敗: " . $db_link->error);
}

$stmt->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiiiiiii", 
    $Q1, $Q2, $Q3, $Q4, $Q5, $Q6, $Q7, $Q8, $Q9, $Q10,
    $Q11, $Q12, $Q13, $Q14, $Q15, $Q16, $Q17, $Q18, $Q19, $Q20,
    $Q21, $Q22, $Q23, $Q24, $Q25, $Q26, $Q27, $Q28, $Q29, $Q30
);

// 執行插入
if ($stmt->execute()) {
    echo "新紀錄創建成功";
} else {
    echo "錯誤: " . $stmt->error;
}    

// 初始化四季的计数器
$spring = 0;
$summer = 0;
$autumn = 0;
$winter = 0;



// 使用 switch 语句根据不同的答案增加对应季节的计数器
switch ($Q1) {
    case 1:
        $winter += 5;
        break;
    case 2:
        $summer += 3; $autumn += 2;
        break;
    case 3:
        $spring += 3; $summer += 1; $autumn += 2;
        break;
    case 0:
        break;   
}
switch ($Q2) {
    case 1:
        $autumn += 3; $winter += 7;
        break;
    case 2:
        $spring += 5; $summer += 5; $autumn += 3;
        break;
    case 0:
        break;   
}
switch ($Q3) {
    case 1:
        $autumn += 3; $winter += 5;
        break;
    case 2:
        $summer += 5;
        break;
    case 3:
        $spring += 5; $autumn += 4;
        break;
    case 4:
        break;
    case 0:
        break;   
}
switch ($Q4) {
    case 1:
        $spring += 10; $autumn += 10;
        break;
    case 2:
        $summer += 10; $winter += 10;
        break;
    case 3:
        break;
    case 0:
        break;   
}
switch ($Q5) {
    case 1:
        $spring += 7; $autumn += 3;
        break;
    case 2:
        $summer += 6; $autumn += 1; $winter += 3;
        break;
    case 3:
        $spring += 2; $summer += 2; $autumn += 6;
        break;
    case 4:
        $spring += 1; $summer += 3; $autumn += 6;
        break;
    case 0:
        break;   
}
switch ($Q6) {
    case 1:
        $summer += 7; $winter += 3;
        break;
    case 2:
        $spring += 7; $summer += 1; $autumn += 2;
        break;
    case 3:
        $winter += 7;
        break;
    case 4:
        $spring += 3; $autumn += 7;
        break;
    case 0:
        break;   
}
switch ($Q7) {
    case 1:
        $autumn += 5; $winter += 5;
        break;
    case 2:
        $spring += 5; $summer += 5;
        break;
    case 0:
        break;   
}
switch ($Q8) {
    case 1:
        $autumn += 5; $winter += 5;
        break;
    case 2:
        $spring += 5; $summer += 5;
        break;
    case 3:
        break;
    case 0:
        break;   
}
switch ($Q9) {
    case 1:
        break;
    case 2:
        $summer += 3; $autumn += 3; $winter += 6;
        break;
    case 3:
        $spring += 6; $summer += 3; $autumn += 3;
        break;
    case 0:
        break;   
}
switch ($Q10) {
    case 1:
        $spring += 7; $autumn += 3;
        break;
    case 2:
        $summer += 7; $autumn += 3;
        break;
    case 3:
        $summer += 2; $winter += 6;
        break;
    case 4:
        break;
    case 0:
        break;   
}
switch ($Q11) {
    case 1:
        $winter += 5;
        break;
    case 2:
        $spring += 5; $autumn += 5;
        break;
    case 3:
        $summer += 5; $winter += 2;
        break;
    case 0:
        break;   
}
switch ($Q12) {
    case 1:
        $spring += 5; $autumn += 2;
        break;
    case 2:
        $summer += 5; $autumn += 4; $winter += 5;
        break;
    case 0:
        break;   
}
switch ($Q13) {
    case 1:
        $autumn += 5;
        break;
    case 2:
        $winter += 5;
        break;
    case 3:
        $spring += 5; $summer += 5;
        break;
    case 4:
        break;
    case 0:
        break;   
}
switch ($Q14) {
    case 1:
        $spring += 4; $autumn += 2;
        break;
    case 2:
        $summer += 5; $winter += 5;
        break;
    case 3:
        $spring += 1; $autumn += 4;
        break;
    case 0:
        break;   
}
switch ($Q15) {
    case 1:
        $summer += 5; $autumn += 5;
        break;
    case 2:
        $spring += 2; $winter += 5;
        break;
    case 3:
        $spring += 5; $winter += 2;
        break;
    case 0:
        break;   
}
switch ($Q16) {
    case 1:
        $winter += 5;
        break;
    case 2:
        $spring += 5; $autumn += 3;
        break;
    case 3:
        $summer += 5; $autumn += 2;
        break;
    case 0:
        break;   
}
switch ($Q17) {
    case 1:
        $spring += 5; $autumn += 3;
        break;
    case 2:
        $summer += 5; $autumn += 2;
        break;
    case 3:
        $winter += 5;
        break;
    case 0:
        break;   
}
switch ($Q18) {
    case 1:
        $autumn += 3;
        break;
    case 2:
        $spring += 3; $summer += 3;
        break;
    case 3:
        $summer += 3;
        break;
    case 4:
        $winter += 3;
        break;
    case 5:
        break;        
    case 0:
        break;   
}
switch ($Q19) {
    case 1:
        $summer += 4; $winter += 1;
        break;
    case 2:
        $spring += 4; $autumn += 1;
        break;
    case 3:
        $spring += 1; $autumn += 4;
        break;
    case 4:
        $summer += 1; $winter += 4;
        break;
    case 5:
        break;  
    case 0:
        break;   
}
switch ($Q20) {
    case 1:
        $winter += 3;
        break;
    case 2:
        $spring += 3;
        break;
    case 3:
        $autumn += 3;
        break;
    case 4:
        $summer += 3;
        break;
    case 5:
        break;  
    case 0:
        break;   
}
switch ($Q21) {
    case 1:
        $winter += 3;
        break;
    case 2:
        $summer += 3;
        break;
    case 3:
        $spring += 3;
        break;
    case 4:
        $summer += 3;
        break;
    case 0:
        break;   
}
switch ($Q22) {
    case 1:
        $winter += 3;
        break;
    case 2:
        $spring += 3; $summer += 3;
        break;
    case 3:
        $spring += 3;
        break;
    case 4:
        $autumn += 3;
        break;
    case 0:
        break;   
}
switch ($Q23) {
    case 1:
        $winter += 3;
        break;
    case 2:
        $summer += 3;
        break;
    case 3:
        $spring += 3;
        break;
    case 4:
        $autumn += 3;
        break;
    case 0:
        break;   
}
switch ($Q24) {
    case 1:
        $winter += 3;
        break;
    case 2:
        $autumn += 3;
        break;
    case 3:
        $summer += 3;
        break;
    case 4:
        $spring += 3;
        break;
    case 5:
        break;  
    case 0:
        break;   
}
switch ($Q25) {
    case 1:
        $autumn += 3;
        break;
    case 2:
        $winter += 3;
        break;
    case 3:
        $spring += 3;
        break;
    case 4:
        $summer += 3;
        break; 
    case 0:
        break;   
}
switch ($Q26) {
    case 1:
        $autumn += 3;
        break;
    case 2:
        $winter += 3;
        break;
    case 3:
        $summer += 3;
        break;
    case 4:
        $spring += 3;
        break;
    case 0:
        break;   
}
switch ($Q27) {
    case 1:
        $summer += 3;
        break;
    case 2:
        $winter += 3;
        break;
    case 3:
        $spring += 3; $autumn += 3;
        break;
    case 0:
        break;   
}
switch ($Q28) {
    case 1:
        $spring += 3;
        break;
    case 2:
        $autumn += 3;
        break;
    case 3:
        $summer += 3;
        break;
    case 4:
        $summer += 3; $winter += 3;
        break;
    case 5:
        break;  
    case 0:
        break;        
}
switch ($Q29) {
    case 1:
        $spring += 3; $autumn += 3;
        break;
    case 2:
        $autumn += 3;
        break;
    case 3:
        $spring += 3; $summer += 3;
        break;
    case 4:
        $winter += 3;
        break;
    case 5:
        break;  
    case 0:
        break;   
}
switch ($Q30) {
    case 1:
        $spring += 3;
        break;
    case 2:
        $autumn += 3;
        break;
    case 3:
        $summer += 3;
        break;
    case 4:
        $winter += 3;
        break;
    case 5:
        break;  
    case 0:
        break;   
}   

$scores = array("spring" => $spring, "summer" => $summer, "autumn" => $autumn, "winter" => $winter);
echo json_encode($scores);

?>

