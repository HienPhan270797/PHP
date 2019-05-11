//gọi ajax để xử lý đặt hàng
$(".add-to-cart").click(function(){
	var id = $(this).data('id');
	$.ajax({
		url: 'xuly_datmua.php',
		type: 'GET',
		dataType: 'text',
		data: {id: id},
		success: function(result){
			if(result.length>0){
				alert("Có lỗi khi đặt hàng: " + result);
			}
			else{
				alert("Cảm ơn bạn, bạn đã đặt mua sản phẩm thành công.");
				location.reload(); //tải lại trang web để cập nhật thông tin giỏ hàng
			}
		}
	});
})
//xử lý tăng số lượng đặt hàng
$(".cart_quantity_up").click(function(e){
	e.preventDefault();
	var id = $(this).data('id');
	$.ajax({
		url: 'xuly_datmua.php',
		type: 'GET',
		dataType: 'text',
		data: 
		{	id: id,
			action: "tang"
		},
		success: function(result){
			if(result.length>0){
				alert("Có lỗi khi cập nhập số lượng\n" + result);
			}
			else{
				//thành công-> tải lại trang
				location.reload(); //tải lại trang web để cập nhật thông tin giỏ hàng
			}
		}
	});
})

//xử lý giảm số lượng đặt hàng
$(".cart_quantity_down").click(function(e){
	e.preventDefault();
	var id = $(this).data('id');
	$.ajax({
		url: 'xuly_datmua.php',
		type: 'GET',
		dataType: 'text',
		data: 
		{id: id,
			action: "giam"
		},
		success: function(result){
			if(result.length>0){
				alert("Có lỗi khi cập nhập số lượng\n" + result);
			}
			else{
				//thành công-> tải lại trang
				location.reload(); //tải lại trang web để cập nhật thông tin giỏ hàng
			}
		}
	});
})
//xử lý xóa đơn hàng
$(".cart_quantity_delete").click(function(e){
	e.preventDefault();
	var id = $(this).data('id');
	$.ajax({
		url: 'xuly_datmua.php',
		type: 'GET',
		dataType: 'text',
		data: 
		{id: id,
			action: "xoa"
		},
		success: function(result){
			if(result.length>0){
				alert("Có lỗi khi cập nhập số lượng\n" + result);
			}
			else{
				//thành công-> tải lại trang
				location.reload(); //tải lại trang web để cập nhật thông tin giỏ hàng
			}
		}
	});
})

//xử lý lưu đơn hàng
$("#thanhtoan-form").submit(function(e){
	e.preventDefault();
	var id = $(this).data('id');
	$.ajax({
		url: 'xuly_datmua.php',
		type: 'GET',
		dataType: 'text',
		data: 
		{
			action: "luu",
			name: $("#name").val(),
			address: $("#address").val(),
			phone: $("#phone").val(),
			email: $("#email").val()
		},
		success: function(result){
			if(result.length>0){
				alert("Có lỗi khi lưu đơn hàng\n" + result);
			}
			else{
				alert("Cảm ơn đã đặt hàng từ trang web của tôi.\nChung tôi sẽ liên hệ với bạn để xác nhận.\n Xin chân thành cảm ơn.")
				//thành công-> tải lại trang
				window.location.href="index.php"; //tải lại trang index
			}
		}
	});
})