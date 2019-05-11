<div class="header-middle"><!--header-middle-->
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
								{if isset($smarty.session.cart)}
									<sup><span class="badge" style="background-color: #f00">{$smarty.session.cart|count}</span></sup>
								{/if}
								Giỏ hàng
							</a>
						</li>
						
						<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--/header-middle-->