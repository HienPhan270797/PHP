<?php
/* Smarty version 3.1.33, created on 2019-01-18 14:31:52
  from 'C:\xampp\htdocs\php05_eshopper\views\layouts\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c41d548e85171_66726116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4216dc61547df8d5cbe1c38ca3341c5d43695c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php05_eshopper\\views\\layouts\\master.tpl',
      1 => 1547817324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/layouts/head-meta.php' => 1,
    'file:views/layouts/header-top.php' => 1,
    'file:views/layouts/header-middle.php' => 1,
    'file:views/layouts/header-bottom.php' => 1,
    'file:views/layouts/leftsidebar-productcategory.php' => 1,
    'file:views/layouts/leftsidebar-productbrand.php' => 1,
    'file:views/layouts/leftsidebar-pricerange.php' => 1,
    'file:views/layouts/leftsidebar-shipping.php' => 1,
    'file:views/layouts/footer-top.php' => 1,
    'file:views/layouts/footer-widgets.php' => 1,
    'file:views/layouts/footer-bottom.php' => 1,
    'file:views/layouts/bottom-meta.php' => 1,
  ),
),false)) {
function content_5c41d548e85171_66726116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:views/layouts/head-meta.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/header-top.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/header-middle.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/header-bottom.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header><!--/header-->
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10958865285c41d548e7d473_08805868', 'slider');
?>

	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/leftsidebar-productcategory.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					
						<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/leftsidebar-productbrand.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						
						<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/leftsidebar-pricerange.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						
						<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/leftsidebar-shipping.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15041714405c41d548e812f6_25028329', 'content');
?>

				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/footer-top.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/footer-widgets.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/footer-bottom.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</footer><!--/Footer-->
	
	<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/bottom-meta.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
</body>
</html><?php }
/* {block 'slider'} */
class Block_10958865285c41d548e7d473_08805868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider' => 
  array (
    0 => 'Block_10958865285c41d548e7d473_08805868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'slider'} */
/* {block 'content'} */
class Block_15041714405c41d548e812f6_25028329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15041714405c41d548e812f6_25028329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
