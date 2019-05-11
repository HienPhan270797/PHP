<?php
require_once __DIR__.'/../libs/Database.php';
class CategoryModel{
	//hàm lưu category
	public function save($cateinfo){
		$db = new Database();
		$sql = "insert into category(name, parentid) values(:name, :parentid)";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":name"] = $cateinfo["name"];
		$ts[":parentid"] = $cateinfo["parentid"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//Hàm để xóa category
	public function delete($id){
		$db = new Database();
		$sql = "delete from category where id = :id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] = $id;
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về ds category
	public function getCateList(){
		$db = new Database();
		$sql = "select category.id, category.name, category.parentid, p.name as parentname from category left join category p on category.parentid = p.id";
		$db->setQuery($sql);
		$dulieu = $db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	} 

	//Hàm dùng để sửa (cập nhật) thông tin category
	public function update($cateinfo){
		$db = new Database();
		$sql = "update category set name=:name, parentid=:parentid where id=:id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] = $cateinfo["id"];
		$ts[":name"] = $cateinfo["name"];
		$ts[":parentid"] = $cateinfo["parentid"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về thông tin chi tiết category
	public function getCateDetail($id){
		$db = new Database();
		$sql = "select category.id, category.name, category.parentid, p.name as parentname from category left join category p on category.parentid = p.id where id=:id";
		$db->setQuery($sql);
		$ts[":id"] = $id;
		$dulieu = $db->loadRow(PDO::FETCH_OBJ, $ts);
		$db->closeConnection();
		return $dulieu;
	} 
}
?>