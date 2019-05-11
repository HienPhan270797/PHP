<?php
/* Smarty version 3.1.33, created on 2019-01-18 14:32:01
  from 'C:\xampp\htdocs\php05_eshopper\views\shop_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c41d551e5c214_07704961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '505606b063354d46359e4a3af5e72a65980bbafe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php05_eshopper\\views\\shop_view.tpl',
      1 => 1547817930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/layouts/shop-featuresitems.php' => 1,
  ),
),false)) {
function content_5c41d551e5c214_07704961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1585353275c41d551e50696_74204528', 'slider');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21313362185c41d551e54513_26134087', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master.tpl");
}
/* {block 'slider'} */
class Block_1585353275c41d551e50696_74204528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider' => 
  array (
    0 => 'Block_1585353275c41d551e50696_74204528',
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
class Block_21313362185c41d551e54513_26134087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21313362185c41d551e54513_26134087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/layouts/shop-featuresitems.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
