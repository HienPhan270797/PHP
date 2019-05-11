<?php
session_start();
//xử lý giỏ hàng rỗng
if (!isset($_SESSION['cart']) || count($_SESSION['cart'])==0) {
	echo "<script> alert('Bạn chưa đặt mua sp nào');
		window.location.href='index.php';
		</script>";
}
else{
//Đây là index controller
//Sử dụng smarty template
require_once './libs/smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = "./views"; //ấn định đường dẫn đến thư mục view

//Chúng ta xử lý các nghiệp vụ ở đây
//Chúng ta gọi các model để lấy dữ liệu ở đây
//lấy ra danh mục sản phẩm
require_once 'models/CategoryModel.php';
$catemodel = new CategoryModel();
$cate_list = $catemodel->getCateList();
$smarty->assign("cate_list", $cate_list); //gởi ds Danh mục SP này qua view

//lấy ra danh sách SP nổi bật
require_once 'models/ManufacturerModel.php';
$manumodel = new ManufacturerModel();
$manupro_list = $manumodel->getManufacturerProductCount();
$smarty->assign("manupro_list", $manupro_list); //gởi ds Danh SP SP này qua view
//tính tổng tiefn của giỏ hàng và gửi qua view
$tongtien=0;
foreach ($_SESSION['cart'] as $ct) {
	$tongtien += $ct['price'] * $ct['sl'];
}
$smarty->assign("tongtien", $tongtien);
//Cuối cùng, gọi view để hiển thị
//include 'views/index_view.php';
$smarty->display("cart_view.tpl"); //truyền vào tên view
}
?>