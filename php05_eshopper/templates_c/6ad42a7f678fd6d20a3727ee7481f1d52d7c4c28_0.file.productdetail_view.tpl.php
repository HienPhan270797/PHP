<?php
/* Smarty version 3.1.33, created on 2019-01-18 14:32:14
  from 'C:\xampp\htdocs\php05_eshopper\views\productdetail_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c41d55e375e83_09818654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ad42a7f678fd6d20a3727ee7481f1d52d7c4c28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php05_eshopper\\views\\productdetail_view.tpl',
      1 => 1547817717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/layouts/productdetail_layout.php' => 1,
    'file:views/layouts/recommended-items.php' => 1,
  ),
),false)) {
function content_5c41d55e375e83_09818654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14077697265c41d55e366485_88151301', 'slider');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3934963225c41d55e36a302_94202868', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master.tpl");
}
/* {block 'slider'} */
class Block_14077697265c41d55e366485_88151301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider' => 
  array (
    0 => 'Block_14077697265c41d55e366485_88151301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'slider'} */
/* {block 'content'} */
class Block_3934963225c41d55e36a302_94202868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3934963225c41d55e36a302_94202868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/layouts/productdetail_layout.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:views/layouts/recommended-items.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
