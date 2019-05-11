<?php
/* Smarty version 3.1.33, created on 2019-03-01 09:13:36
  from 'D:\xampp1\htdocs\php05_eshopper\views\layouts\slider.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c78e9b09e4f01_39064207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '792c400c762ab00fff1afa51b7593b35e57c70a6' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\php05_eshopper\\views\\layouts\\slider.php',
      1 => 1550394408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c78e9b09e4f01_39064207 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider_list']->value, 'na', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['na']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
						<li data-target="#slider" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="active"></li>
						<?php } else { ?>
						<li data-target="#slider" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></li>
						<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>

					<div class="carousel-inner">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider_list']->value, 'slider', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['slider']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
						<div class="item active">
						<?php } else { ?>
						<div class="item">
						<?php }?>
							<div class="col-sm-6">
								<h1><?php echo $_smarty_tpl->tpl_vars['slider']->value->title;?>
</h1>
								<h2><?php echo $_smarty_tpl->tpl_vars['slider']->value->subtitle;?>
</h2>
								<p><?php echo $_smarty_tpl->tpl_vars['slider']->value->content;?>
</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['slider']->value->link;?>
" class="btn btn-default get">Xem chi tiết</a>
							</div>
							<div class="col-sm-6">
								<img src="images/home/<?php echo $_smarty_tpl->tpl_vars['slider']->value->picture;?>
" class="girl img-responsive" alt="" />
								<img src="images/home/pricing.png"  class="pricing" alt="" />
							</div>
						</div> <!-- ./item -->
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div> <!-- ./carousel-inner -->

					<a href="#slider" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
		</div>
	</div>
</section><!--/slider--><?php }
}
