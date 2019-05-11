<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{block name=title}{/block}</title>
 {include "views/layouts/meta-top.tpl"}
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  {include "views/layouts/header.tpl"}

 {include "views/layouts/left-sidebar.tpl"}

  <div class="content-wrapper">
     {block name=content}{/block}
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {include "views/layouts/footer.tpl"}
  <!-- Control Sidebar -->
  {include "views/layouts/control-sidebar.tpl"}  
  <div class="control-sidebar-bg">
    
  </div>
</div>
 {include "views/layouts/meta-bottom.tpl"}
</body>
</html>
