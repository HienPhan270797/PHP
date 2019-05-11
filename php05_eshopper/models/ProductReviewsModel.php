<?php
require_once __DIR__.'/../libs/Database.php';

class ProductReviewsModel {
	//hàm để lưu category
	public function save($pr_info){
		$db=new Database();
		$sql="insert into productreviews(productid, reviewername, revieweremail, reviewcontent, ratevalue) VALUES (:productid, :reviewername, :revieweremail, :reviewcontent, :ratevalue)";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":productid"]=$pr_info["productid"];
		$ts[":reviewername"]=$pr_info["reviewername"];
		$ts[":revieweremail"]=$pr_info["revieweremail"];
		$ts[":reviewcontent"]=$pr_info["reviewcontent"];
		$ts[":ratevalue"]=$pr_info["ratevalue"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
		
	}
	//Hàm để xóa category
	public function delete($id){
		$db=new Database();
		$sql="delete from productreviews where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về ds user
	public function getProductReviewsList(){
		$db=new Database();
		$sql="select id, productid, reviewername, revieweremail, reviewcontent, ratevalue from productreviews";
		//chuẩn bị giá trị cho các tham số
		
		$db->setQuery($sql);
		$dulieu=$db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	}
	//Hàm dùng để sửa (cập nhật)
	public function update($pr_info){
		$db=new Database();
		$sql="update productreviews SET productid=:productid, reviewername=:reviewername, revieweremail=:revieweremail, reviewcontent=:reviewcontent, ratevalue=:ratevalue where id=:id";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$pr__info["id"];
		$ts[":productid"]=$pr_info["productid"];
		$ts[":reviewername"]=$pr_info["reviewername"];
		$ts[":revieweremail"]=$pr_info["revieweremail"];
		$ts[":reviewcontent"]=$pr_info["reviewcontent"];
		$ts[":ratevalue"]=$pr_info["ratevalue"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về thông tin chi tiết user
	public function getProductReviewsDetail($id){
		$db=new Database();
		$sql="select id, productid, reviewername, revieweremail, reviewcontent, ratevalue from productreviews where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
	
		$dulieu=$db->loadRow(PDO::FETCH_OBJ,$ts);
		$db->closeConnection();
		return $dulieu;
	}
}
?>