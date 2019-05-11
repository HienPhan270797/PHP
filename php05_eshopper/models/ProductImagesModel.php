<?php
require_once __DIR__.'/../libs/Database.php';
class ProductImagesModel {
	//hàm để lưu
	public function save($pi_info){
		$db=new Database();
		$sql="insert into productimages(productid, image) VALUES (:productid, :image)";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":productid"]=$pi_info["productid"];
		$ts[":image"]=$pi_info["image"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
		
	}
	//Hàm để xóa
	public function delete($id){
		$db=new Database();
		$sql="delete from productimages where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về ds
	public function getProductImagesList(){
		$db=new Database();
		$sql="select id, productid, image from productimages";
		//chuẩn bị giá trị cho các tham số
		
		$db->setQuery($sql);
		$dulieu=$db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	}
	//Hàm dùng để sửa (cập nhật)
	public function update($pi_info){
		$db=new Database();
		$sql="update productimages SET productid=:productid, image=:image where id=:id";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$pi_info["id"];
		$ts[":productid"]=$pi_info["productid"];
		$ts[":image"]=$pi_info["image"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về thông tin chi tiết
	public function getProductimagesDetail($id){
		$db=new Database();
		$sql="select id, productid, image from productimages where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
	
		$dulieu=$db->loadRow(PDO::FETCH_OBJ,$ts);
		$db->closeConnection();
		return $dulieu;
	}
}
?>