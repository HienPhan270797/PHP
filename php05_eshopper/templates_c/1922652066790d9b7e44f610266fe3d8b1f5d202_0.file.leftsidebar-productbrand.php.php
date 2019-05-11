<?php
/* Smarty version 3.1.33, created on 2019-03-01 09:13:36
  from 'D:\xampp1\htdocs\php05_eshopper\views\layouts\leftsidebar-productbrand.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c78e9b0ae2e15_77931751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1922652066790d9b7e44f610266fe3d8b1f5d202' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\php05_eshopper\\views\\layouts\\leftsidebar-productbrand.php',
      1 => 1550971330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c78e9b0ae2e15_77931751 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="brands_products"><!--brands_products-->
	<h2>Thương hiệu</h2>
	<div class="brands-name">
		<ul class="nav nav-pills nav-stacked">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manupro_list']->value, 'manupro');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manupro']->value) {
?>
			<li><a href="#"> <span class="pull-right">(<?php echo $_smarty_tpl->tpl_vars['manupro']->value->SL;?>
)</span><?php echo $_smarty_tpl->tpl_vars['manupro']->value->name;?>
</a></li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div><!--/brands_products--><?php }
}
