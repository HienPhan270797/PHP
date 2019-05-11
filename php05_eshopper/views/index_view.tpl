{extends file="layouts/master.tpl"}

{block name=slider}
	{include 'views/layouts/slider.php'}
{/block}

{block name=content}
	{include 'views/layouts/features-items.php'}
	{include 'views/layouts/category-tabs.php'}
	{include 'views/layouts/recommended-items.php'}
{/block}