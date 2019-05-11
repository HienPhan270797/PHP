<?php
/* Smarty version 3.1.33, created on 2019-02-24 05:19:34
  from 'C:\xampp\htdocs\php05_eshopper\views\cart_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c721b56a16322_84542672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb9e1651f8c338db32de02312b61bbe40dda45bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php05_eshopper\\views\\cart_view.tpl',
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
function content_5c721b56a16322_84542672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17749011955c721b56a0a7a3_38763711', 'slider');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19219419195c721b56a0e623_83330143', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master.tpl");
}
/* {block 'slider'} */
class Block_17749011955c721b56a0a7a3_38763711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider' => 
  array (
    0 => 'Block_17749011955c721b56a0a7a3_38763711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'slider'} */
/* {block 'content'} */
class Block_19219419195c721b56a0e623_83330143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19219419195c721b56a0e623_83330143',
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
