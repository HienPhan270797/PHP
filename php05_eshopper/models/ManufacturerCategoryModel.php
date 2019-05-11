<?php
require_once __DIR__.'/../libs/Database.php';
class ManufacturerCategoryModel{
	//hàm lưu
	public function save($manucateinfo){
		$db = new Database();
		$sql = "insert into manufacturercategory(manufacturerid, categoryid) values(:manuid, :cateid)";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":manuid"] = $manucateinfo["manuid"];
		$ts[":cateid"] = $manucateinfo["cateid"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//Hàm để xóa
	public function delete($id){
		$db = new Database();
		$sql = "delete from manufacturercategory where id = :id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] = $id;
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về ds
	public function getManuCateList(){
		$db = new Database();
		$sql = "select manufacturercategory.id, manufacturerid, categoryid, name from manufacturercategory inner join manufacturer on manufacturercategory.manufacturerid = manufacturer.id";
		$db->setQuery($sql);
		$dulieu = $db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	} 

	//Hàm dùng để sửa (cập nhật) thông tin
	public function update($cateinfo){
		$db = new Database();
		$sql = "update manufacturercategory set manufacturerid=:manuid, categoryid=:cateid where id=:id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] 					= $cateinfo["id"];
		$ts[":cateid"] 			= $cateinfo["cateid"];
		$ts[":manufacturerid"] 	= $cateinfo["manuid"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về thông tin chi tiết category
	public function getManuCateDetail($id){
		$db = new Database();
		$sql = "select id, manufacturerid, categoryid from manufacturercategory where id=:id";
		$db->setQuery($sql);
		$ts[":id"] = $id;
		$dulieu = $db->loadRow(PDO::FETCH_OBJ, $ts);
		$db->closeConnection();
		return $dulieu;
	} 
}
?>