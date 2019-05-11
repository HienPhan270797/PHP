<?php
/* Smarty version 3.1.33, created on 2019-03-01 09:13:36
  from 'D:\xampp1\htdocs\php05_eshopper\views\layouts\category-tabs.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c78e9b0c6d8b0_17669754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56287e09cadae15fa20062a2773dfc96440362d' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\php05_eshopper\\views\\layouts\\category-tabs.php',
      1 => 1550895648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c78e9b0c6d8b0_17669754 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="category-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate_list']->value, 'cate', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cate']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['k']->value < 4) {?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
				<li class="active">
				<?php } else { ?>
				<li>
				<?php }?>
				<a href="#catetab-<?php echo $_smarty_tpl->tpl_vars['cate']->value->id;?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['cate']->value->name;?>
</a>
				</li>
			<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
	<div class="tab-content">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate_list']->value, 'cate', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cate']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['k']->value < 4) {?>
		<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
		<div class="tab-pane fade active in" id="catetab-<?php echo $_smarty_tpl->tpl_vars['cate']->value->id;?>
" >
		<?php } else { ?>
		<div class="tab-pane fade" id="catetab-<?php echo $_smarty_tpl->tpl_vars['cate']->value->id;?>
" >
		<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['procate_list']->value[$_smarty_tpl->tpl_vars['cate']->value->id], 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
			<div class="col-sm-3"> <!-- bắt đầu 1 SP -->
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/<?php echo $_smarty_tpl->tpl_vars['p']->value->picture;?>
"/>
							<h2>
								<?php if ($_smarty_tpl->tpl_vars['p']->value->saleprice > 0 && $_smarty_tpl->tpl_vars['p']->value->saleprice < $_smarty_tpl->tpl_vars['p']->value->price) {?>
									<small><s><?php echo number_format($_smarty_tpl->tpl_vars['p']->value->price);?>
</s></small> <?php echo number_format($_smarty_tpl->tpl_vars['p']->value->saleprice);?>
 <sup>đ</sup>
								<?php } else { ?>
									<?php echo number_format($_smarty_tpl->tpl_vars['p']->value->price);?>
 <sup>đ</sup>
								<?php }?>
							</h2>
							<p style="height: 20px; overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
</p>
							<a data-id=<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
 href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
					</div>
				</div>
			</div> <!-- ./kết thúc SP -->
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div> <!-- ./tab-pane -->
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div> <!-- ./tab-content -->
</div><!--/category-tab--><?php }
}
