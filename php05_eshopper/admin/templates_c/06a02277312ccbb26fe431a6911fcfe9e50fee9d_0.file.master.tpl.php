<?php
/* Smarty version 3.1.33, created on 2019-03-03 03:30:52
  from 'D:\xampp1\htdocs\php05_eshopper\admin\views\layouts\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7b3c5c3a4f85_66130294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06a02277312ccbb26fe431a6911fcfe9e50fee9d' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\php05_eshopper\\admin\\views\\layouts\\master.tpl',
      1 => 1551580249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/layouts/meta-top.tpl' => 1,
    'file:views/layouts/header.tpl' => 1,
    'file:views/layouts/left-sidebar.tpl' => 1,
    'file:views/layouts/footer.tpl' => 1,
    'file:views/layouts/control-sidebar.tpl' => 1,
    'file:views/layouts/meta-bottom.tpl' => 1,
  ),
),false)) {
function content_5c7b3c5c3a4f85_66130294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15337138735c7b3c5c371872_12972766', 'title');
?>
</title>
 <?php $_smarty_tpl->_subTemplateRender("file:views/layouts/meta-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php $_smarty_tpl->_subTemplateRender("file:views/layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <?php $_smarty_tpl->_subTemplateRender("file:views/layouts/left-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="content-wrapper">
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17577825085c7b3c5c39e6d1_64217451', 'content');
?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $_smarty_tpl->_subTemplateRender("file:views/layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- Control Sidebar -->
  <?php $_smarty_tpl->_subTemplateRender("file:views/layouts/control-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
  <div class="control-sidebar-bg">
    
  </div>
</div>
 <?php $_smarty_tpl->_subTemplateRender("file:views/layouts/meta-bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
/* {block 'title'} */
class Block_15337138735c7b3c5c371872_12972766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15337138735c7b3c5c371872_12972766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_17577825085c7b3c5c39e6d1_64217451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17577825085c7b3c5c39e6d1_64217451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
