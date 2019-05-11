<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Sản phẩm nổi bật</h2>
	{foreach $feapro_list as $fp}
	<div class="col-sm-4"> <!-- bắt đầu 1 sp -->
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="images/home/{$fp->picture}"/>
					<h2>
						{if $fp->saleprice >0 && $fp->saleprice < $fp->price}
							<small><s>{number_format($fp->price)}</s></small> {number_format($fp->saleprice)} <sup>đ</sup>
						{else}
							{number_format($fp->price)} <sup>đ</sup>
						{/if}
					</h2>
					<p style="height: 20px; overflow: hidden;">{$fp->name}</p>
				</div>
				<div class="product-overlay">
					<div class="overlay-content" style="opacity: 1">
						<a data-id="{$fp->id}" href="#" class="btn btn-default add-to-cart" style="border: solid 1px #fe980f; border-radius: 5px; box-shadow: 1px 1px 5px #333;"><i class="fa fa-shopping-cart"></i>Đặt mua</a>
					</div>
				</div>
				{if $fp->saleprice >0 && $fp->saleprice < $fp->price}
				<img src="images/home/sale.png" class="new" alt="" />
				{else}
					{if strtotime($fp->createdate) > strtotime('-30 days',strtotime(date('y-m-d')))}
						<img src="images/home/new.png" class="new" alt="" />
					{/if}
				{/if}
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#" data-id={$fp->id}><i class="fa fa-plus-square"></i>Yêu thích</a></li>
					<li><a href="#" data-id={$fp->id}><i class="fa fa-plus-square"></i>So sánh</a></li>
				</ul>
			</div>
		</div>
	</div> <!-- ./col-4: một sản phẩm -->
	{/foreach}
</div><!--features_items-->