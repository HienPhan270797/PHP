<?php
/* Smarty version 3.1.33, created on 2019-03-07 10:12:44
  from 'D:\xampp1\htdocs\php05_eshopper\views\shop_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c80e08c655775_81824423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22ac1702caba038a38e0a6a00cb36f129e93d68c' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\php05_eshopper\\views\\shop_view.tpl',
      1 => 1547817930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/layouts/shop-featuresitems.php' => 1,
  ),
),false)) {
function content_5c80e08c655775_81824423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16167563005c80e08c54bf94_88997035', 'slider');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4465337425c80e08c550535_64957493', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master.tpl");
}
/* {block 'slider'} */
class Block_16167563005c80e08c54bf94_88997035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider' => 
  array (
    0 => 'Block_16167563005c80e08c54bf94_88997035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="advertisement">
	<div class="container">
		<img src="images/shop/advertisement.jpg" alt="" />
	</div>
</section>
<?php
}
}
/* {/block 'slider'} */
/* {block 'content'} */
class Block_4465337425c80e08c550535_64957493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4465337425c80e08c550535_64957493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/layouts/shop-featuresitems.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
