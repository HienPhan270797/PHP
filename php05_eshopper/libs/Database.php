<?php
//Thiết lập các tham số kết nối CSDL
define("HOSTNAME","localhost");
define("DBNAME","eshopper");
define("USERNAME", "root");
define("PASSWORD","");

class Database {
	//Khai báo biến (field)
	var $connect=null;
	var $sql = '';
	var $result=null;

	//hàm khởi tạo
	public function __construct() {

		$this->connect = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
		$this->connect->exec("SET NAMES utf8");
	}
	//Hàm đóng kết nối
	public function closeConnection(){
		$this->connect = null;
	}

	//Hàm thiết lập câu lệnh SQL
	public function setQuery($sql){
		$this->sql = $sql;
	}

	//hàm thực thi câu lệnh sql
	public function execute($opts = array()){
		$this->result = $this->connect->prepare($this->sql);
		if($opts) //nếu có tham số
			foreach ($opts as $key => $value) //gán các tham số    
				$this->result->bindValue($key, $value); 
		//thực thi câu lệnh SQL sau khi gán tham số (nếu có)
		$this->result->execute(); 
		return $this->result; //trả kết quả về
	}

	//hàm thực thi câu lệnh non-query
	public function runNonQuery($opts = array()){
		$this->result = $this->connect->prepare($this->sql);
		if($opts) //nếu có tham số
			foreach ($opts as $key => $value) //gán các tham số    
				$this->result->bindValue($key, $value); 
		//thực thi câu lệnh SQL sau khi gán tham số (nếu có)
		return $this->result->execute(); //trả về số dòng tác động
	}

	//hàm trả về các dòng dữ liệu
	public function loadAllRows($fetchStyle, $options = array()){
		if(!$options)  //nếu không có tham số
			$data = $this->execute();
		else  //có tham số thì gán tham số vào lệnh execute
			$data = $this->execute($options);

		if($data != null)
			return $data->fetchAll($fetchStyle); 
		else
			return false;
	}

	//hàm trả về một dòng dữ liệu
	public function loadRow($fetchStyle, $options = array()){
		if(!$options)  //nếu không có tham số
			$data = $this->execute();
		else  //có tham số thì gán tham số vào lệnh execute
			$data = $this->execute($options);

		if($data != null)
			return $data->fetch($fetchStyle); 
		else
			return false;
	}
	//hàm trả về ID cuối cùng trong bảng
	public function getLastId(){
		return $this->connect->lastInsertId();
	}

	//đếm số dòng kết quả
	public function rowCount(){
		return $this->result->rowCount();
	} 
}
?>