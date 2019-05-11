<?php
//Đây là index controller
//Chúng ta xử lý các nghiệp vụ ở đây
//Chúng ta gọi các model để lấy dữ liệu ở đây

//Cuối cùng, gọi view để hiển thị
//include 'views/productdetail_view.php';

//Sử dụng smarty template
require_once './libs/smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = "./views"; //ấn định đường dẫn đến thư mục view
$smarty->display("productdetail_view.tpl"); //truyền vào tên view
?>
