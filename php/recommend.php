<?php 
header('Content-Type: application/json');
session_start();
$response= array();

$inputs= json_decode(file_get_contents("php://input"), true);

if (!isset($inputs['referer'])) {
	$response['state'] = false;
	echo json_encode($response);
	die();
}

$referer= $inputs['referer'];

if (!isset($_SESSION['gender'])) {
	$response['state'] = false;

} else if ($_SESSION['gender'] == 'man') {
	$response['state']= true;
	if ($referer == '/spring.php'){
		$response['products']= [
			['id' => 95, 'name' => '合身亞麻長袖T恤-活力橘', 'price' => 499, 'image_path'=> 'images/product/76-1.png'],
			['id' => 249, 'name' => '寬鬆丹寧長袖T恤-暖鵝黃', 'price' => 300, 'image_path'=> 'images/product/209-2.png'],
			['id' => 253, 'name' => '學院風長袖POLO衫-薄荷綠色', 'price' => 650, 'image_path'=> 'images/product/211-2.png'],
			['id' => 386, 'name' => '針織圓領長袖衫-奶油色', 'price' => 300, 'image_path'=> 'images/product/340-1.png'],
			['id' => 103, 'name' => '經典風格合身長褲-米白色', 'price' => 550, 'image_path'=> 'images/product/82.png'],
			['id' => 258, 'name' => '時尚丹寧長褲-奶杏色', 'price' => 399, 'image_path'=> 'images/product/216.png'],
			['id' => 37, 'name' => '學院風長袖棉質西裝套裝-嫩芽綠色', 'price' => 1499, 'image_path'=> 'images/product/29.png'],
			['id' => 119, 'name' => '無領長袖套裝-米杏色', 'price' => 799, 'image_path'=> 'images/product/97.png']
		];
	} else if ($referer == '/summer.php'){
		$response['products']= [
			['id' => 10, 'name' => '純色大學T-卡其綠色', 'price' => 400, 'image_path'=> 'images/product/10.png'],
			['id' => 94, 'name' => '亞麻立領中式襯衫-亞麻原色', 'price' => 499, 'image_path'=> 'images/product/75.png'],
			['id' => 250, 'name' => '寬鬆丹寧長袖T恤-溫柔藍', 'price' => 300, 'image_path'=> 'images/product/209-3.png'],
			['id' => 316, 'name' => '單口袋皮革襯衫-淺藍色', 'price' => 750, 'image_path'=> 'images/product/273.png'],
			['id' => 14, 'name' => '日系寬褲-深藍色', 'price' => 680, 'image_path'=> 'images/product/14-1.png'],
			['id' => 16, 'name' => '中線窄管學院風褲裝（男）-灰色', 'price' => 799, 'image_path'=> 'images/product/15.png'],
			['id' => 38, 'name' => '格紋撞色復古棉質套裝', 'price' => 750, 'image_path'=> 'images/product/30.png'],
			['id' => 407, 'name' => '休閒冬季套裝-米白', 'price' => 750, 'image_path'=> 'images/product/358.png']
		];
	} else if ($referer == '/autumn.php') {
		$response['products']= [
			['id' => 12, 'name' => '工裝感外套-橄欖色', 'price' => 449, 'image_path'=> 'images/product/12.png'],
			['id' => 247, 'name' => '百搭丹寧長袖襯衫-卡其色', 'price' => 650, 'image_path'=> 'images/product/208.png'],
			['id' => 252, 'name' => '學院風長袖POLO衫-咖啡色', 'price' => 699, 'image_path'=> 'images/product/211-1.png'],
			['id' => 389, 'name' => '針織v領長袖衫-灰土黃', 'price' => 585, 'image_path'=> 'images/product/341-2.png'],
			['id' => 18, 'name' => '棉質窄管九分褲-棕卡其', 'price' => 600, 'image_path'=> 'images/product/17-1.png'],
			['id' => 257, 'name' => '日系寬鬆丹寧長褲-卡其綠', 'price' => 499, 'image_path'=> 'images/product/215.png'],
			['id' => 115, 'name' => '亞麻短袖無領套裝-綠卡其', 'price' => 699, 'image_path'=> 'images/product/93.png'],
			['id' => 405, 'name' => '針織長袖西裝套裝-杏色', 'price' => 1599, 'image_path'=> 'images/product/356.png']
		];
	} else if ($referer == '/winter.php') {
		$response['products']= [
			['id' => 8, 'name' => '純棉襯衫-白色', 'price' => 499, 'image_path'=> 'images/product/8.png'],
			['id' => 245, 'name' => '雙口袋丹寧男裝長袖襯衫-純白色', 'price' => 500, 'image_path'=> 'images/product/206.png'],
			['id' => 317, 'name' => '修身皮革外套-黑色', 'price' => 899, 'image_path'=> 'images/product/274.png'],
			['id' => 318, 'name' => '工裝風雙口袋外套-黃色', 'price' => 795, 'image_path'=> 'images/product/275.png'],
			['id' => 15, 'name' => '日系寬褲-黑色', 'price' => 680, 'image_path'=> 'images/product/14-2.png'],
			['id' => 396, 'name' => '針織抽繩縮口長褲-淺粉色', 'price' => 780, 'image_path'=> 'images/product/348.png'],
			['id' => 270, 'name' => '丹寧男裝-白色', 'price' => 999, 'image_path'=> 'images/product/228.png'],
			['id' => 411, 'name' => '秋季慵懶針織套裝', 'price' => 450, 'image_path'=> 'images/product/361.png']
		];
	} else {
		$response['state'] = false;
	}

} else if ($_SESSION['gender'] == 'women') {
	$response['state']= true;
	if ($referer == '/spring.php'){
		$response['products']= [
			['id' => 53, 'name' => '輕民族風撞色合身外套', 'price' => 459, 'image_path'=> 'images/product/42.png'],
			['id' => 132, 'name' => '口袋同色扣長袖襯-米白', 'price' => 399, 'image_path'=> 'images/product/106-2.png'],
			['id' => 352, 'name' => '修身微立領長袖衫-奶油色', 'price' => 399, 'image_path'=> 'images/product/306.png'],
			['id' => 426, 'name' => '針織高領長袖毛衣-杏色', 'price' => 399, 'image_path'=> 'images/product/372.png'],
			['id' => 142, 'name' => '寬鬆綁帶長褲-亞麻原色', 'price' => 499, 'image_path'=> 'images/product/113.png'],
			['id' => 430, 'name' => '針織微喇叭褲-米杏色', 'price' => 365, 'image_path'=> 'images/product/376.png'],
			['id' => 377, 'name' => '皮革套裝-花瓣粉', 'price' => 859, 'image_path'=> 'images/product/331.png'],
			['id' => 454, 'name' => '運動長袖針織套裝-杏色', 'price' => 780, 'image_path'=> 'images/product/395.png']
		];
	} else if ($referer == '/summer.php'){
		$response['products']= [
			['id' => 128, 'name' => '簡約合身長袖襯衫-灰米綠', 'price' => 599, 'image_path'=> 'images/product/104-1.png'],
			['id' => 206, 'name' => '中山領燈籠袖上衣-淺粉紫色', 'price' => 435, 'image_path'=> 'images/product/172.png'],
			['id' => 279, 'name' => '水洗丹寧長袖襯衫-淺藍色', 'price' => 420, 'image_path'=> 'images/product/237.png'],
			['id' => 425, 'name' => '領口撞色針織外套-翡翠綠', 'price' => 545, 'image_path'=> 'images/product/371.png'],
			['id' => 56, 'name' => '寬鬆棉質長褲-米灰色', 'price' => 450, 'image_path'=> 'images/product/45.png'],
			['id' => 434, 'name' => '腰鬆緊針織寬褲-藍色', 'price' => 349, 'image_path'=> 'images/product/379.png'],
			['id' => 79, 'name' => '日系不對稱長褲套裝-深棕色', 'price' => 999, 'image_path'=> 'images/product/63.png'],
			['id' => 305, 'name' => '雙口袋秋日套裝-藍色', 'price' => 699, 'image_path'=> 'images/product/263.png']
		];
	} else if ($referer == '/autumn.php') {
		$response['products']= [
			['id' => 47, 'name' => '船型領長版大衣-可可色', 'price' => 799, 'image_path'=> 'images/product/39.png'],
			['id' => 204, 'name' => '中式領造型雪紡長袖襯衫-巧克力色', 'price' => 499, 'image_path'=> 'images/product/170.png'],
			['id' => 424, 'name' => '中領針織打底長袖上衣-酒紅色', 'price' => 299, 'image_path'=> 'images/product/370-2.png'],
			['id' => 427, 'name' => '復古圓領毛衣-棕色', 'price' => 560, 'image_path'=> 'images/product/373.png'],
			['id' => 60, 'name' => '日系打褶寬褲-灰綠色', 'price' => 699, 'image_path'=> 'images/product/49-1.png'],
			['id' => 212, 'name' => '合身百搭雪紡長褲（附綁帶）-墨綠色', 'price' => 499, 'image_path'=> 'images/product/178.png'],
			['id' => 307, 'name' => '輕工裝風套裝-鮭魚色', 'price' => 900, 'image_path'=> 'images/product/265.png'],
			['id' => 456, 'name' => '寬鬆冬季針織套裝-蜜瓜橘', 'price' => 899, 'image_path'=> 'images/product/397.png']
		];
	} else if ($referer == '/winter.php') {
		$response['products']= [
			['id' => 49, 'name' => '合身圓領棉質上衣-寶藍色', 'price' => 249, 'image_path'=> 'images/product/40-2.png'],
			['id' => 280, 'name' => '金屬釦長袖襯衫-黑色', 'price' => 450, 'image_path'=> 'images/product/238.png'],
			['id' => 282, 'name' => '工裝風長袖襯衫-白色', 'price' => 399, 'image_path'=> 'images/product/240.png'],
			['id' => 423, 'name' => '中領針織打底長袖上衣-黑色', 'price' => 299, 'image_path'=> 'images/product/370-1.png'],
			['id' => 285, 'name' => '水洗丹寧女裝長褲-淺藍色', 'price' => 699, 'image_path'=> 'images/product/243.png'],
			['id' => 428, 'name' => '針織西裝長褲-黑色', 'price' => 350, 'image_path'=> 'images/product/374.png'],
			['id' => 302, 'name' => '明線修身丹寧套裝-深藍色', 'price' => 765, 'image_path'=> 'images/product/260.png'],
			['id' => 455, 'name' => '修身小香風針織套裝', 'price' => 999, 'image_path'=> 'images/product/396.png']
		];
	} else {
		$response['state'] = false;
	}
}

echo json_encode($response);
?>