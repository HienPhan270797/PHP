<?php
require_once __DIR__.'/../libs/Database.php';

class ProductCategoryModel{
	//hàm lưu
	public function save($procateinfo){
		$db = new Database();
		$sql = "insert into productcategory(productid, categoryid) values(:proid, :cateid)";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":proid"] 	= $procateinfo["proid"];
		$ts[":cateid"] = $procateinfo["cateid"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//Hàm để xóa
	public function delete($id){
		$db = new Database();
		$sql = "delete from productcategory where id = :id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] = $id;
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về ds
	public function getProCateList(){
		$db = new Database();
		$sql = "select id, productid, categoryid from productcategory";
		$db->setQuery($sql);
		$dulieu = $db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	} 

	//Hàm dùng để sửa (cập nhật) thông tin
	public function update($procateinfo){
		$db = new Database();
		$sql = "update productcategory set productid=:proid, categoryid=:cateid where id=:id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] 		= $procateinfo["id"];
		$ts[":cateid"] = $procateinfo["cateid"];
		$ts[":proid"] 	= $procateinfo["proid"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về thông tin chi tiết
	public function getProCateDetail($id){
		$db = new Database();
		$sql = "select id, productid, categoryid from productcategory where id=:id";
		$db->setQuery($sql);
		$ts[":id"] = $id;
		$dulieu = $db->loadRow(PDO::FETCH_OBJ, $ts);
		$db->closeConnection();
		return $dulieu;
	} 
}
?>