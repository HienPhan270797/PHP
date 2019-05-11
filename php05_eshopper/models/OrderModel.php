<?php
require_once __DIR__.'/../libs/Database.php';
class OrderModel{
	//hàm lưu đơn hàng
	public function save($orderinfo){
		$db = new Database();
		$sql = "insert into orders(orderdate, customername, customeremail, customerphone, customeraddress) values(:date, :name, :email, :phone, :address)";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":name"] 	= $orderinfo["name"];
		$ts[":date"] 	= $orderinfo["date"];
		$ts[":email"] 	= $orderinfo["email"];
		$ts[":phone"] 	= $orderinfo["phone"];
		$ts[":address"] = $orderinfo["address"];
		$i = $db->runNonQuery($ts);
		$i=$db->getLastId(); //lấy mã đơn hàng mới vừa thêm
		$db->closeConnection();
		return $i; //trả về mã đơn hàng mới vừa thêm
	}

	//Hàm để xóa đơn hàng
	public function delete($id){
		$db = new Database();
		$sql = "delete from order where id = :id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] = $id;
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về ds category
	public function getOrderList(){
		$db = new Database();
		$sql = "select id, orderdate, customername, customeremail, customerphone, customeraddress, status from order";
		$db->setQuery($sql);
		$dulieu = $db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	} 

	//Hàm dùng để sửa (cập nhật) thông tin đơn hàng
	public function update($orderinfo){
		$db = new Database();
		$sql = "update order set customername=:name, customeremail=:email, customeraddress=:address, customerphone=:phone, status=:status where id=:id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] 		= $orderinfo["id"];
		$ts[":name"] 	= $orderinfo["name"];
		$ts[":email"] 	= $orderinfo["email"];
		$ts[":phone"] 	= $orderinfo["phone"];
		$ts[":address"] = $orderinfo["address"];
		$ts[":status"] = $orderinfo["status"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về thông tin chi tiết category
	public function getOrderDetail($id){
		$db = new Database();
		$sql = "select id, orderdate, customername, customeremail, customerphone, customeraddress, status from order where id=:id";
		$db->setQuery($sql);
		$ts[":id"] = $id;
		$dulieu = $db->loadRow(PDO::FETCH_OBJ, $ts);
		$db->closeConnection();
		return $dulieu;
	} 
}
?>