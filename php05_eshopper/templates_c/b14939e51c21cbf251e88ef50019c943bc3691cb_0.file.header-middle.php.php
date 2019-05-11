<?php
/* Smarty version 3.1.33, created on 2019-02-24 05:09:26
  from 'C:\xampp\htdocs\php05_eshopper\views\layouts\header-middle.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7218f6851ec9_67824294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b14939e51c21cbf251e88ef50019c943bc3691cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php05_eshopper\\views\\layouts\\header-middle.php',
      1 => 1550981346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7218f6851ec9_67824294 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header-middle"><!--header-middle-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="logo pull-left">
					<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
				</div>
				<div class="btn-group pull-right">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
							USA
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Canada</a></li>
							<li><a href="#">UK</a></li>
						</ul>
					</div>

					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
							DOLLAR
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Canadian Dollar</a></li>
							<li><a href="#">Pound</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="shop-menu pull-right">
					<ul class="nav navbar-nav">
						<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
						<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
						<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
						<li>
							<a href="cart.php">
								<i class="fa fa-shopping-cart"></i>
								<?php if (isset($_SESSION['cart'])) {?>
									<sup><span class="badge" style="background-color: #f00"><?php echo count($_SESSION['cart']);?>
</span></sup>
								<?php }?>
								Giỏ hàng
							</a>
						</li>
						
						<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--/header-middle--><?php }
}
