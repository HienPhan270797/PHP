<?php
//Đây là shop controller
//Chúng ta xử lý các nghiệp vụ ở đây
//Chúng ta gọi các model để lấy dữ liệu ở đây

//Cuối cùng, gọi view để hiển thị
//include 'views/shop_view.php';

//Sử dụng smarty template
require_once './libs/smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = "./views"; //ấn định đường dẫn đến thư mục view
$smarty->display("shop_view.tpl"); //truyền vào tên view
?>