<!DOCTYPE html>
<html lang="en">
<head>
    {include "views/layouts/head-meta.php"}
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		{include 'views/layouts/header-top.php'}
		{include 'views/layouts/header-middle.php'}
		{include 'views/layouts/header-bottom.php'}
	</header><!--/header-->
	
	{block name=slider}{/block}
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						{include 'views/layouts/leftsidebar-productcategory.php'}
					
						{include 'views/layouts/leftsidebar-productbrand.php'}
						
						{include 'views/layouts/leftsidebar-pricerange.php'}
						
						{include 'views/layouts/leftsidebar-shipping.php'}
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					{block name=content}{/block}
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		{include 'views/layouts/footer-top.php'}
		{include 'views/layouts/footer-widgets.php'}
		{include 'views/layouts/footer-bottom.php'}
	</footer><!--/Footer-->
	
	{include 'views/layouts/bottom-meta.php'}
	
</body>
</html>