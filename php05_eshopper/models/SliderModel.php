<?php
require_once __DIR__.'/../libs/Database.php';

class SliderModel {
	//hàm để lưu category
	public function save($sliderinfo){
		$db=new Database();
		$sql="insert into slider(picture, title, subtitle, content, link) values (:picture, :title, :subtitle, :content, :link)";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":picture"]=$sliderinfo["picture"];
		$ts[":title"]=$sliderinfo["title"];
		$ts[":subtitle"]=$sliderinfo["subtitle"];
		$ts[":content"]=$sliderinfo["content"];
		$ts[":link"]=$sliderinfo["link"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
		
	}
	//Hàm để xóa
	public function delete($id){
		$db=new Database();
		$sql="delete from slider where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về ds user
	public function getSliderList(){
		$db=new Database();
		$sql="select id, picture, title, subtitle, content, link from slider";
		//chuẩn bị giá trị cho các tham số
		
		$db->setQuery($sql);
		$dulieu=$db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	}
	//Hàm dùng để sửa (cập nhật)
	public function update($sliderinfo){
		$db=new Database();
		$sql="update slider set picture=:picture, title=:title, subtitle=:subtitle, content=:content, link=:link where id=:id";
		$db->setQuery($sql);
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$sliderinfo["id"];
		$ts[":picture"]=$sliderinfo["picture"];
		$ts[":title"]=$sliderinfo["title"];
		$ts[":subtitle"]=$sliderinfo["subtitle"];
		$ts[":content"]=$sliderinfo["content"];
		$ts[":link"]=$sliderinfo["link"];
		$i=$db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}
	//hàm để trả về thông tin chi tiết user
	public function getSliderDetail($id){
		$db=new Database();
		$sql="select id, picture, title, subtitle, content, link from slider where id=:id";
		//chuẩn bị giá trị cho các tham số
		$ts[":id"]=$id;
		$db->setQuery($sql);
	
		$dulieu=$db->loadRow(PDO::FETCH_OBJ,$ts);
		$db->closeConnection();
		return $dulieu;
	}
}
?>