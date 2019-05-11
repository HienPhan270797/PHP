<div class="brands_products"><!--brands_products-->
	<h2>Thương hiệu</h2>
	<div class="brands-name">
		<ul class="nav nav-pills nav-stacked">
			{foreach $manupro_list as $manupro}
			<li><a href="#"> <span class="pull-right">({$manupro->SL})</span>{$manupro->name}</a></li>
			{/foreach}
		</ul>
	</div>
</div><!--/brands_products-->