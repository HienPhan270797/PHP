<?php
require_once __DIR__.'/../libs/Database.php';
class ProductModel{
	//hàm lưu product
	public function save($productinfo){
		$db = new Database();
		$sql = "insert into product(name, picture, price, saleprice, status, createdate, detail, makerid) values(:name, :picture, :price, :saleprice, :status, :createdate, :detail, :makerid)";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":name"] 		= $productinfo["name"];
		$ts[":picture"] 	= $productinfo["picture"];
		$ts[":price"] 		= $productinfo["price"];
		$ts[":saleprice"] = $productinfo["saleprice"];
		$ts[":status"] 	= $productinfo["status"];
		$ts[":createdate"] = $productinfo["createdate"];
		$ts[":detail"] 	= $productinfo["detail"];
		$ts[":makerid"] 	= $productinfo["makerid"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//Hàm để xóa product
	public function delete($id){
		$db = new Database();
		$sql = "delete from product where id = :id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] = $id;
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về ds product
	public function getProductList(){
		$db = new Database();
		$sql = "select id, name, picture, price, saleprice, status, createdate, detail, makerid, manufacture.name as manufacturename from product left join manufacture on product.makerid = manufacture.id";
		$db->setQuery($sql);
		$dulieu = $db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	} 

	//Hàm dùng để sửa (cập nhật) thông tin product
	public function update($productinfo){
		$db = new Database();
		$sql = "update product set name=:name, picture=:picture, price=:price, saleprice=:saleprice, status=:status, createdate=:createdate, detail=:detail, makerid=:makerid where id=:id";
		$db->setQuery($sql);
		//Chuẩn bị giá trị cho các tham số
		$ts[":id"] 			= $productinfo["id"];
		$ts[":name"] 		= $productinfo["name"];
		$ts[":picture"] 	= $productinfo["picture"];
		$ts[":price"] 		= $productinfo["price"];
		$ts[":saleprice"] = $productinfo["saleprice"];
		$ts[":status"] 	= $productinfo["status"];
		$ts[":createdate"] = $productinfo["createdate"];
		$ts[":detail"] 	= $productinfo["detail"];
		$ts[":makerid"] 	= $productinfo["makerid"];
		$i = $db->runNonQuery($ts);
		$db->closeConnection();
		return $i;
	}

	//hàm để trả về thông tin chi tiết product
	public function getProductDetail($id){
		$db = new Database();
		$sql = "select product.id, product.name, picture, price, saleprice, status, createdate, detail, makerid, manufacturer.name as manufacturename from product left join manufacturer on product.makerid = manufacturer.id where product.id=:id";
		$db->setQuery($sql);
		$ts[":id"] = $id;
		$dulieu = $db->loadRow(PDO::FETCH_OBJ, $ts);
		$db->closeConnection();
		return $dulieu;
	} 

	//Trả về danh sách sản phẩm nổi bật
	public function getFeatureProductList(){
		$db = new Database();
		$sql = "select product.id, product.name, picture, price, saleprice, status, createdate, detail, makerid, manufacturer.name as manufacturename from product left join manufacturer on product.makerid = manufacturer.id where feature=1 
			order by createdate desc
			limit 0,6";
		$db->setQuery($sql);
		$dulieu = $db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	} 

	//Trả về danh sách sản phẩm theo thể loại
	public function getProductListByCategory(){
		$db = new Database();
		//lấy ra ds các thể loại
		$sql = "select id, name from category";
		$db->setQuery($sql);
		$dstl = $db->loadAllRows(PDO::FETCH_OBJ);

		//lặp qua từng thể loại để lấy về ds SP
		foreach ($dstl as $tl) {
			$sql = "select product.id, product.name, picture, price, saleprice, createdate, categoryid from product left join productcategory on product.id = productcategory.productid
				where categoryid = " . $tl->id . "
				order by createdate desc limit 0,4";
			$db->setQuery($sql);
			$dulieu[$tl->id] = $db->loadAllRows(PDO::FETCH_OBJ);
		}
		
		$db->closeConnection();
		return $dulieu;
	} 

	//Trả về danh sách sản phẩm nổi bật
	public function getRecommendedProductList(){
		$db = new Database();
		$sql = "select product.id, product.name, picture, product.price, saleprice, createdate, sum(amount) as tongSL from product left join orderdetail on product.id = orderdetail.productid 
			group by product.id, product.name, picture, price, saleprice, createdate 
			order by sum(amount) DESC 
			limit 0,9";
		$db->setQuery($sql);
		$dulieu = $db->loadAllRows(PDO::FETCH_OBJ);
		$db->closeConnection();
		return $dulieu;
	} 
}
?>