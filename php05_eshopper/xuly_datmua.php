<?php
session_start();
//xử lý th cập nhập sl tăng
if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "tang"){
	//Lấy giỏ hàng hiện hành ra
	if(isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		//lặp qua từng dòng của giỏ hàng
		foreach ($cart as $k=>$cart_item) {
			if($cart_item['id'] == $_GET['id']){
				//SP này đã có trong giỏ hàng
				$cart[$k]['sl'] ++; //tăng số lượng lên
				//lưu giỏ hàng trở lại vào session
				$_SESSION['cart'] = $cart;
				return;
			}
		}
	}
}
//xử lý th cập nhập sl giam
else if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] =="giam"){
	//Lấy giỏ hàng hiện hành ra
	if(isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		//lặp qua từng dòng của giỏ hàng
		foreach ($cart as $k=>$cart_item) {
			if($cart_item['id'] == $_GET['id']){
				//SP này đã có trong giỏ hàng
				$cart[$k]['sl'] --; //tăng số lượng lên
				if ($cart[$k]['sl'] == 0) {
					unset($cart[$k]); //nếu sl xún = 0 thì xóa
				}
				//lưu giỏ hàng trở lại vào session
				$_SESSION['cart'] = $cart;
				return;
			}
		}
	}
}
//xử lý th xóa sp trong giỏ hàng
else if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] =="xoa"){
	//Lấy giỏ hàng hiện hành ra
	if(isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		//lặp qua từng dòng của giỏ hàng
		foreach ($cart as $k=>$cart_item) {
			if($cart_item['id'] == $_GET['id']){
				unset($cart[$k]); //xóa sp trong giỏ hàng
				$_SESSION['cart'] = $cart;
				return;
			}
		}
	}
}
else if(isset($_GET['action']) && $_GET['action'] == "luu"){
	//load OrderModel để lưu đơn hàng
	require_once "models/OrderModel.php";
	$omodel = new OrderModel();
	date_default_timezone_set("asia/Ho_Chi_Minh");
	$info['date'] = date("Y-m-d H:i:s");
	$info['name'] = $_GET['name'];
	$info['email'] = $_GET['email'];
	$info['phone'] = $_GET['phone'];
	$info['address'] = $_GET['address'];
	//lưu đơn hàng
	$madh = $omodel->save($info);

	//lưu chi tiết đơn hàng
	require_once "models/OrderDetailModel.php";
	$odmodel = new OrderDetailModel();
	//lặp qua session giỏ hàng để lấy từng chi tiết
	foreach ($_SESSION['cart'] as $ct) {
		$od['orderid'] = $madh;
		$od['productid'] = $ct['id'];
		$od['amount'] = $ct['sl'];
		$od['price'] = $ct['price'];
		//lưu
		$odmodel->save($od);
	}
	//lưu xong đơn hàng rồi thì hủy giỏ hàng
	unset($_SESSION['cart']);
}
//xử lý th đặt mua mới
else if(isset($_GET['id'])){
	//Lấy giỏ hàng hiện hành ra
	if(isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		//lặp qua từng dòng của giỏ hàng
		foreach ($cart as $k=>$cart_item) {
			if($cart_item['id'] == $_GET['id']){
				//SP này đã có trong giỏ hàng
				$cart[$k]['sl'] ++; //tăng số lượng lên
				//lưu giỏ hàng trở lại vào session
				$_SESSION['cart'] = $cart;
				return;
			}
		}
	}
	//nếu lặp qua giỏ hàng mà ko có SP này thì thêm 1 dòng SP mới
	$cart_item['id'] = $_GET['id']; //lưu id
	$cart_item['sl'] = 1; //số lượng
	//lấy giá bán của SP này từ CSDL
	require_once 'models/ProductModel.php';
	$pmodel = new ProductModel();
	$pdetail = $pmodel->getProductDetail($_GET['id']);
	$cart_item['name'] = $pdetail->name; //lưu tên sp
	$cart_item['picture'] = $pdetail->picture; //lưu đường dẫn hình
	if($pdetail->saleprice!=null && $pdetail->saleprice > 0)
		$cart_item['price'] = $pdetail->saleprice;
	else
		$cart_item['price'] = $pdetail->price;
	
	//thêm dòng cart-item này vào giỏ hàng hiện hành
	$cart[] = $cart_item;

	//lưu giỏ hàng trở lại vào session
	$_SESSION['cart'] = $cart;
}
?>