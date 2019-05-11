<?php
/* Smarty version 3.1.33, created on 2019-02-17 11:00:33
  from 'C:\xampp\htdocs\php05_eshopper\views\layouts\leftsidebar-productcategory.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6930c1963133_38284623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd8f43d6ce91749c322998947c3e093d68f05978' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php05_eshopper\\views\\layouts\\leftsidebar-productcategory.php',
      1 => 1550397620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6930c1963133_38284623 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Danh mục</h2>
<div class="panel-group category-products" id="accordian"><!--category-->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate_list']->value, 'cate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordian" href="#cate<?php echo $_smarty_tpl->tpl_vars['cate']->value->id;?>
">
					<span class="badge pull-right"><i class="fa fa-plus"></i></span>
					<?php echo $_smarty_tpl->tpl_vars['cate']->value->name;?>

				</a>
			</h4>
		</div>
		<div id="cate<?php echo $_smarty_tpl->tpl_vars['cate']->value->id;?>
" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manucate_list']->value, 'manucate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manucate']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['manucate']->value->categoryid == $_smarty_tpl->tpl_vars['cate']->value->id) {?>
					<li><a href="category.php?manuid=<?php echo $_smarty_tpl->tpl_vars['manucate']->value->manufacturerid;?>
"><?php echo $_smarty_tpl->tpl_vars['manucate']->value->name;?>
 </a></li>
					<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
		</div>
	</div> <!-- ./panel (từng category) -->
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><!--/category-products--><?php }
}
