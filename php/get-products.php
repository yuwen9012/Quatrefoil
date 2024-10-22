<?php
header('Content-Type: application/json');

include("connect.php");
$select_db= mysqli_select_db($db_link, "quatrefoil");
$response= array();

if(!$select_db) {
    $select_db->close();
    $response['state']= false;
    echo json_encode($response);
    die();
} else {
    $get_inputs = json_decode(file_get_contents("php://input"), true);

    $conditions= array();
    $sql = "SELECT * FROM product_info WHERE ";
    $queryParts = [];
    $params = [];
    $types = '';

    $queryParts[]= '(1=1)';

    if (isset($get_inputs['season'])) {
        $season= explode('-', $get_inputs['season']);
        
        $season_query= [];
        $placeholders = implode(',', array_fill(0, count($season), '?'));

        $season_query[] = "season_1 IN ($placeholders)";
        $params = array_merge($params, $season);

        $season_query[] = "season_2 IN ($placeholders)";
        $params = array_merge($params, $season);

        $season_query[] = "season_3 IN ($placeholders)";
        $params = array_merge($params, $season);

        $types .= str_repeat('s', 3*count($season));

        $queryParts[]= '(' . implode(' OR ', $season_query) . ')';
    }

    function get_param($name, $value){
        global $conditions;
        $conditions[$name]= explode('-', $value);
    }

    if(isset($get_inputs['gender'])){
        if (count(explode('-', $get_inputs['gender']))==1){
            get_param('gender', $get_inputs['gender']);
        } else{
            $response['state']= false;
            echo json_encode($response);
            die();
        }
    }

    if(isset($get_inputs['type'])){
        if (count(explode('-', $get_inputs['type']))==1){
            get_param('type', $get_inputs['type']);
        } else{
            $response['state']= false;
            echo json_encode($response);
            die();
        }
    }

    if(isset($get_inputs['style'])){
        get_param('style', $get_inputs['style']);
    }

    if(isset($get_inputs['pattern'])){
        get_param('pattern', $get_inputs['pattern']);
    }

    if(isset($get_inputs['material'])){
        get_param('material', $get_inputs['material']);
    }

    foreach ($conditions as $column => $values) {
        $placeholders = implode(',', array_fill(0, count($values), '?'));
        $queryParts[] = "$column IN ($placeholders)";
    
        $params = array_merge($params, $values);
        $types .= str_repeat('s', count($values)); 
    }

    if (isset($get_inputs['min_price'])){
        if (is_numeric($get_inputs['min_price'])){
            $queryParts[] = "price>= ?";
            $params = array_merge($params, [(int)$get_inputs['min_price']]);
            $types .= 'i'; 
        } else {
            $response['state']= false;
            echo json_encode($response);
            die();
        }
    }

    if (isset($get_inputs['max_price'])){
        if (is_numeric($get_inputs['max_price'])){
            $queryParts[] = "price<= ?";
            $params = array_merge($params, [(int)$get_inputs['max_price']]);
            $types .= 'i';
        } else {
            $response['state']= false;
            echo json_encode($response);
            die();
        }
    }

    $sql .= implode(' AND ', $queryParts);

    if (isset($get_inputs['order'])){
        if ($get_inputs['order']=='asc'){
            $sql .= " ORDER BY price ASC";
        } else if ($get_inputs['order']=='desc'){
            $sql .= " ORDER BY price DESC";
        } else{
            $response['state']= false;
            echo json_encode($response);
            die();
        }
    }

    $stmt = $db_link->prepare($sql);
    if (count($params)>0){
        $stmt->bind_param($types, ...$params); // 使用展開運算符傳遞參數
    }
    $stmt->execute();
    $result = $stmt->get_result();

    $products = [];
    if ($result->num_rows > 0) {
        // 將結果存儲在陣列中
        while($row = $result->fetch_assoc()) {
            $products[] = [
                'id' => $row['id'],
                'name' => $row['product_name'],
                'price' => $row['price'],
                'image_path' => $row['filepath'] // 確保 image_path 在此處被正確取得
            ];
        }
        $response['state']= true;
        $response['products']=$products;
    } else{
        $response['state']= false;
    }
    $stmt->close();
}

echo json_encode($response);
?>