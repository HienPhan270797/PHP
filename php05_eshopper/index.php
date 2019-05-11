<?php
session_start();
//Đây là index controller
//Sử dụng smarty template
require_once './libs/smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = "./views"; //ấn định đường dẫn đến thư mục view

//Chúng ta xử lý các nghiệp vụ ở đây
//Chúng ta gọi các model để lấy dữ liệu ở đây

//lấy ra các slider
require_once 'models/SliderModel.php';
$slidermodel = new SliderModel();
$slider_list = $slidermodel->getSliderList();
$smarty->assign("slider_list", $slider_list); //gởi ds slider này qua view

//lấy ra danh mục sản phẩm
require_once 'models/CategoryModel.php';
$catemodel = new CategoryModel();
$cate_list = $catemodel->getCateList();
$smarty->assign("cate_list", $cate_list); //gởi ds Danh mục SP này qua view

//lấy ra danh mục thương hiệu theo thể loại
require_once 'models/ManufacturerCategoryModel.php';
$manucatemodel = new ManufacturerCategoryModel();
$manucate_list = $manucatemodel->getManuCateList();
$smarty->assign("manucate_list", $manucate_list); //gởi ds Danh mục SP này qua view

//lấy ra danh sách SP nổi bật
require_once 'models/ProductModel.php';
$productmodel = new ProductModel();
$feapro_list = $productmodel->getFeatureProductList();
$smarty->assign("feapro_list", $feapro_list); //gởi ds Danh SP SP này qua view

//lấy về ds tất cả SP
$pro_list = $productmodel->getProductListByCategory();
$smarty->assign("procate_list", $pro_list); //gởi ds Danh SP SP này qua view

//lấy về ds SP khuyến khích mua (recommended product)
$repro_list = $productmodel->getRecommendedProductList();
$smarty->assign("repro_list", $repro_list); //gởi ds Danh SP SP này qua view

//lấy ra danh sách SP nổi bật
require_once 'models/ManufacturerModel.php';
$manumodel = new ManufacturerModel();
$manupro_list = $manumodel->getManufacturerProductCount();
$smarty->assign("manupro_list", $manupro_list); //gởi ds Danh SP SP này qua view

//Cuối cùng, gọi view để hiển thị
//include 'views/index_view.php';
$smarty->display("index_view.tpl"); //truyền vào tên view
?>