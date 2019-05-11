<?php
/* Smarty version 3.1.33, created on 2019-01-18 14:31:52
  from 'C:\xampp\htdocs\php05_eshopper\views\index_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c41d548e56360_23244138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff89a8989107d665d34e39445edcac5ef821ba06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php05_eshopper\\views\\index_view.tpl',
      1 => 1547817655,
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
function content_5c41d548e56360_23244138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11244374305c41d548e46962_18831197', 'slider');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6832935645c41d548e524e8_66278627', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master.tpl");
}
/* {block 'slider'} */
class Block_11244374305c41d548e46962_18831197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider' => 
  array (
    0 => 'Block_11244374305c41d548e46962_18831197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:views/layouts/slider.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'slider'} */
/* {block 'content'} */
class Block_6832935645c41d548e524e8_66278627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6832935645c41d548e524e8_66278627',
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
