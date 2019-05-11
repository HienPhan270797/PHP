<?php
require_once __DIR__.'/../libs/Database.php';
class ManufacturerModel {
	//hàm để lưu manufacturer
	public function save($manufacturerinfo){
		$db=new Database();
		$sql="insert into manufacturer(name, profile) values (:name, :profile)";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":name"]=$manufacturerinfo["name"];
		$ts[":profile"]=$manufacturerinfo["profile"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
		
	}
	//Hàm để xóa manufacturer
	public function delete($id){
		$db=new Database();
		$sql="delete from manufacturer where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về ds manufacturer
	public function getManufacturerList(){
		$db=new Database();
		$sql="select id, name, profile from manufacturer";
		//chuẩn bị giá trị cho các tham số
		
		$db->setQuery($sql);
		$dulieu=$db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	}
	//Hàm dùng để sửa (cập nhật)
	public function update($manufacturerinfo){
		$db=new Database();
		$sql="update manufacturer set name=:name, profile=:profile where id=:id";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$manufacturerinfo["id"];
		$ts[":name"]=$manufacturerinfo["name"];
		$ts[":profile"]=$manufacturerinfo["profile"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về thông tin chi tiết user
	public function getmanufacturerDetail($id){
		$db=new Database();
		$sql="select id, name, profile from manufacturer where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
	
		$dulieu=$db->loadRow(PDO::FETCH_OBJ,$ts);
		$db->closeConnection();
		return $dulieu;
	}

	//hàm để trả về ds manufacturer
	public function getManufacturerProductCount(){
		$db=new Database();
		$sql="select manufacturer.id, manufacturer.name, count(product.id) as SL 
from manufacturer left join product on product.makerid = manufacturer.id 
group by manufacturer.id, name";
		//chuẩn bị giá trị cho các tham số
		
		$db->setQuery($sql);
		$dulieu=$db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	}
}
?>