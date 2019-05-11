<div class="category-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			{foreach $cate_list as $k=>$cate}
			{if $k < 4}
				{if $k==0}
				<li class="active">
				{else}
				<li>
				{/if}
				<a href="#catetab-{$cate->id}" data-toggle="tab">{$cate->name}</a>
				</li>
			{/if}
			{/foreach}
		</ul>
	</div>
	<div class="tab-content">
	{foreach $cate_list as $k=>$cate}
	{if $k < 4}
		{if $k==0}
		<div class="tab-pane fade active in" id="catetab-{$cate->id}" >
		{else}
		<div class="tab-pane fade" id="catetab-{$cate->id}" >
		{/if}
			{foreach $procate_list[$cate->id] as $p}
			<div class="col-sm-3"> <!-- bắt đầu 1 SP -->
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/{$p->picture}"/>
							<h2>
								{if $p->saleprice >0 && $p->saleprice < $p->price}
									<small><s>{number_format($p->price)}</s></small> {number_format($p->saleprice)} <sup>đ</sup>
								{else}
									{number_format($p->price)} <sup>đ</sup>
								{/if}
							</h2>
							<p style="height: 20px; overflow: hidden;">{$p->name}</p>
							<a data-id={$p->id} href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
					</div>
				</div>
			</div> <!-- ./kết thúc SP -->
			{/foreach}
		</div> <!-- ./tab-pane -->
		{/if}
		{/foreach}
	</div> <!-- ./tab-content -->
</div><!--/category-tab-->