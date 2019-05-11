<?php
//Đây là admin-index controller
//Sử dụng smarty template
require_once '../libs/smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = "./views"; //ấn định đường dẫn đến thư mục view

//gán dữ liệu qua views tại đây

$smarty->display("index_view.tpl"); //truyền vào tên view
?>