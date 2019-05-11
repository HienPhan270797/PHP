<?php
/* Smarty version 3.1.33, created on 2019-02-23 04:38:06
  from 'C:\xampp\htdocs\php05_eshopper\views\layouts\features-items.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c70c01e5c2f40_11446518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb08cee7eb26591d000060e35d0472bfef391b68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php05_eshopper\\views\\layouts\\features-items.php',
      1 => 1550893084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c70c01e5c2f40_11446518 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="features_items"><!--features_items-->
	<h2 class="title text-center">Sản phẩm nổi bật</h2>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feapro_list']->value, 'fp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fp']->value) {
?>
	<div class="col-sm-4"> <!-- bắt đầu 1 sp -->
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="images/home/<?php echo $_smarty_tpl->tpl_vars['fp']->value->picture;?>
"/>
					<h2>
						<?php if ($_smarty_tpl->tpl_vars['fp']->value->saleprice > 0 && $_smarty_tpl->tpl_vars['fp']->value->saleprice < $_smarty_tpl->tpl_vars['fp']->value->price) {?>
							<small><s><?php echo number_format($_smarty_tpl->tpl_vars['fp']->value->price);?>
</s></small> <?php echo number_format($_smarty_tpl->tpl_vars['fp']->value->saleprice);?>
 <sup>đ</sup>
						<?php } else { ?>
							<?php echo number_format($_smarty_tpl->tpl_vars['fp']->value->price);?>
 <sup>đ</sup>
						<?php }?>
					</h2>
					<p style="height: 20px; overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['fp']->value->name;?>
</p>
				</div>
				<div class="product-overlay">
					<div class="overlay-content" style="opacity: 1">
						<a data-id="<?php echo $_smarty_tpl->tpl_vars['fp']->value->id;?>
" href="#" class="btn btn-default add-to-cart" style="border: solid 1px #fe980f; border-radius: 5px; box-shadow: 1px 1px 5px #333;"><i class="fa fa-shopping-cart"></i>Đặt mua</a>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['fp']->value->saleprice > 0 && $_smarty_tpl->tpl_vars['fp']->value->saleprice < $_smarty_tpl->tpl_vars['fp']->value->price) {?>
				<img src="images/home/sale.png" class="new" alt="" />
				<?php } else { ?>
					<?php if (strtotime($_smarty_tpl->tpl_vars['fp']->value->createdate) > strtotime('-30 days',strtotime(date('y-m-d')))) {?>
						<img src="images/home/new.png" class="new" alt="" />
					<?php }?>
				<?php }?>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#" data-id=<?php echo $_smarty_tpl->tpl_vars['fp']->value->id;?>
><i class="fa fa-plus-square"></i>Yêu thích</a></li>
					<li><a href="#" data-id=<?php echo $_smarty_tpl->tpl_vars['fp']->value->id;?>
><i class="fa fa-plus-square"></i>So sánh</a></li>
				</ul>
			</div>
		</div>
	</div> <!-- ./col-4: một sản phẩm -->
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><!--features_items--><?php }
}
