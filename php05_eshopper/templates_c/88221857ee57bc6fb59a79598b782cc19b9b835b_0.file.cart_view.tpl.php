<?php
/* Smarty version 3.1.33, created on 2019-03-01 09:13:47
  from 'D:\xampp1\htdocs\php05_eshopper\views\cart_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c78e9bb6fcaa0_28378254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88221857ee57bc6fb59a79598b782cc19b9b835b' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\php05_eshopper\\views\\cart_view.tpl',
      1 => 1550981896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/layouts/cart_detail.php' => 1,
    'file:views/layouts/do_action.php' => 1,
  ),
),false)) {
function content_5c78e9bb6fcaa0_28378254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19505972705c78e9bb6e2d90_02259488', 'slider');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6193004475c78e9bb6e6e40_08193540', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master.tpl");
}
/* {block 'slider'} */
class Block_19505972705c78e9bb6e2d90_02259488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider' => 
  array (
    0 => 'Block_19505972705c78e9bb6e2d90_02259488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'slider'} */
/* {block 'content'} */
class Block_6193004475c78e9bb6e6e40_08193540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6193004475c78e9bb6e6e40_08193540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/cart_detail.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/do_action.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
