<?php
require_once __DIR__.'/../libs/Database.php';

class OrderDetailModel{
	//hàm lưu chi tiết đơn hàng
	public function save($od_info){
		$db = new Database();
		$sql = "insert into orderdetail(orderid, productid, amount, price) values(:orderid, :productid, :amount, :price)";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":orderid"] 	= $od_info["orderid"];
		$ts[":productid"] = $od_info["productid"];
		$ts[":amount"] 	= $od_info["amount"];
		$ts[":price"] 		= $od_info["price"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//Hàm để xóa chi tiết đơn hàng
	public function delete($id){
		$db = new Database();
		$sql = "delete from orderdetail where id = :id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] = $id;
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về ds chi tiết đơn hàng
	public function getOrderDetailList($orderid){
		$db = new Database();
		$sql = "select id, orderid, productid, name, amount, price from orderdetail innerjoin product on orderdetail.productid =product.id where orderid=$orderid";
		$db->setQuery($sql);
		$dulieu = $db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	} 

	//Hàm dùng để sửa (cập nhật) thông tin đơn hàng
	public function update($od_info){
		$db = new Database();
		$sql = "update orderdetail set orderid=:orderid, productid=:productid, amount=:amount, price=:price where id=:id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] 			= $od_info["id"];
		$ts[":orderid"] 	= $od_info["orderid"];
		$ts[":productid"] = $od_info["productid"];
		$ts[":amount"] 	= $od_info["amount"];
		$ts[":price"] 		= $od_info["price"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về thông tin chi tiết category
	public function getOrderDetailDetail($id){
		$db = new Database();
		$sql = "select id, orderid, productid, name, amount, price from orderdetail innerjoin product on orderdetail.productid =product.id where id=:id";
		$db->setQuery($sql);
		$ts[":id"] = $id;
		$dulieu = $db->loadRow(PDO::FETCH_OBJ, $ts);
		$db->closeConnection();
		return $dulieu;
	} 
}
?>