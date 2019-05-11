<?php
require_once __DIR__.'/../libs/Database.php';
class UserModel{
	//hàm để lưu User
	public function save($userinfo){
		$db = new Database();
		$sql = "insert into Users(username, password, fullname, email, avatar, phonenum) values(:username, :password, :fullname, :email, :avatar, :phonenum)";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":username"] = $userinfo["username"];
		$ts[":password"] = $userinfo["password"];
		$ts[":fullname"] = $userinfo["fullname"];
		$ts[":email"] = $userinfo["email"];
		$ts[":avatar"] = $userinfo["avatar"];
		$ts[":phonenum"] = $userinfo["phonenum"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//Hàm để xóa user
	public function delete($username){
		$db = new Database();
		$sql = "delete from Users where username = :username";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":username"] = $username;
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về ds user
	public function getUserList(){
		$db = new Database();
		$sql = "select username, password, fullname, email, avatar, phonenum from Users";
		$db->setQuery($sql);
		$dulieu = $db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	} 

	//Hàm dùng để sửa (cập nhật) thông tin người dùng
	public function update($userinfo){
		$db = new Database();
		$sql = "update Users set password=:password, fullname=:fullname, email=:email, avatar=:avatar, phonenum=:phonenum where username=:username";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":username"] = $userinfo["username"];
		$ts[":password"] = $userinfo["password"];
		$ts[":fullname"] = $userinfo["fullname"];
		$ts[":email"] = $userinfo["email"];
		$ts[":avatar"] = $userinfo["avatar"];
		$ts[":phonenum"] = $userinfo["phonenum"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về thông tin chi tiết user
	public function getUserDetail($username){
		$db = new Database();
		$sql = "select username, password, fullname, email, avatar, phonenum from Users where username=:username";
		$db->setQuery($sql);
		$ts[":username"] = $username;
		$dulieu = $db->loadRow(PDO::FETCH_OBJ, $ts);
		$db->closeConnection();
		return $dulieu;
	} 
}
?>