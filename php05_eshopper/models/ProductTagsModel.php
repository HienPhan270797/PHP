<?php
require_once __DIR__.'/../libs/Database.php';

class ProductTagsModel {
	//hàm để lưu
	public function save($pt_info){
		$db=new Database();
		$sql="insert into producttags(productid, tag) VALUES (:productid, :tag)";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":productid"]=$pt_info["productid"];
		$ts[":tag"]=$pt_info["tag"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
		
	}
	//Hàm để xóa
	public function delete($id){
		$db=new Database();
		$sql="delete from producttags where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về ds
	public function getProductTagsList(){
		$db=new Database();
		$sql="select id, productid, tag from producttags";
		//chuẩn bị giá trị cho các tham số
		
		$db->setQuery($sql);
		$dulieu=$db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	}
	//Hàm dùng để sửa (cập nhật)
	public function update($pt_info){
		$db=new Database();
		$sql="update producttags set productid=:productid, tag=:tag where id=:id";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$pt_info["id"];
		$ts[":productid"]=$pt_info["productid"];
		$ts[":tag"]=$pt_info["tag"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về thông tin chi tiết user
	public function getProductTagsDetail($id){
		$db=new Database();
		$sql="select id, productid, tag from producttags where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
	
		$dulieu=$db->loadRow(PDO::FETCH_OBJ,$ts);
		$db->closeConnection();
		return $dulieu;
	}
}
?>