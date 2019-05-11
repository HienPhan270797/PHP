<h2>Danh mục</h2>
<div class="panel-group category-products" id="accordian"><!--category-->
	{foreach $cate_list as $cate}
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordian" href="#cate{$cate->id}">
					<span class="badge pull-right"><i class="fa fa-plus"></i></span>
					{$cate->name}
				</a>
			</h4>
		</div>
		<div id="cate{$cate->id}" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					{foreach $manucate_list as $manucate}
					{if $manucate->categoryid == $cate->id}
					<li><a href="category.php?manuid={$manucate->manufacturerid}">{$manucate->name} </a></li>
					{/if}
					{/foreach}
				</ul>
			</div>
		</div>
	</div> <!-- ./panel (từng category) -->
	{/foreach}
</div><!--/category-products-->