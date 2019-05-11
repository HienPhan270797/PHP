<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">Sản phẩm bán chạy</h2>

	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			{foreach $repro_list as $k=>$repro} 
			{if $k % 3 == 0} <!-- bắt đầu nhóm mới -->
				{if $k==0}
					<div class="item active">	<!-- bắt đầu 1 carousel item -->
				{else}
					<div class="item">	<!-- bắt đầu 1 carousel item -->
				{/if}
			{/if}
				<div class="col-sm-4"> <!-- Bắt đầu 1 SP -->
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="images/home/{$repro->picture}" alt="" />
								<h2>
									{if $repro->saleprice >0 && $repro->saleprice < $repro->price}
										<small><s>{number_format($repro->price)}</s></small> {number_format($repro->saleprice)} <sup>đ</sup>
									{else}
										{number_format($repro->price)} <sup>đ</sup>
									{/if}
								</h2>
								<p>{$repro->name}</p>
								<a data-id="{$repro->id}" href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Đặt mua</a>
							</div> <!-- ./product-info -->
						</div> <!-- ./single-product -->
					</div> <!-- ./product-image -->
				</div> <!-- ./sản phẩm -->
			{if $k % 3 == 2}
			</div> <!-- ./carousel-item -->
			{/if}
			{/foreach}
		</div> <!-- ./carousel-inner -->
		<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>			
	</div>
</div><!--/recommended_items-->