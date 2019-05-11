<?php
/* Smarty version 3.1.33, created on 2019-03-01 09:13:36
  from 'D:\xampp1\htdocs\php05_eshopper\views\index_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c78e9b05fd957_51331529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e768e6a1d880ed7e86e3dee43ea250482fe6c59' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\php05_eshopper\\views\\index_view.tpl',
      1 => 1547817654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/layouts/slider.php' => 1,
    'file:views/layouts/features-items.php' => 1,
    'file:views/layouts/category-tabs.php' => 1,
    'file:views/layouts/recommended-items.php' => 1,
  ),
),false)) {
function content_5c78e9b05fd957_51331529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20721492925c78e9b05db6c0_19976097', 'slider');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3898971575c78e9b05f5510_57182896', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master.tpl");
}
/* {block 'slider'} */
class Block_20721492925c78e9b05db6c0_19976097 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider' => 
  array (
    0 => 'Block_20721492925c78e9b05db6c0_19976097',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/slider.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'slider'} */
/* {block 'content'} */
class Block_3898971575c78e9b05f5510_57182896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3898971575c78e9b05f5510_57182896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/features-items.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/category-tabs.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/recommended-items.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
