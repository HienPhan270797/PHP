{extends file="layouts/master.tpl"}

{block name=slider}
<section id="advertisement">
	<div class="container">
		<img src="images/shop/advertisement.jpg" alt="" />
	</div>
</section>
{/block}

{block name=content}
	{include "views/layouts/shop-featuresitems.php"}
{/block}