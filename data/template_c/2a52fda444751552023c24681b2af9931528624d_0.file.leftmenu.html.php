<?php
/* Smarty version 3.1.30, created on 2017-12-13 14:29:00
  from "E:\xampp\htdocs\tpl\admin\leftmenu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a30c8ac27bea9_04248600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a52fda444751552023c24681b2af9931528624d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\tpl\\admin\\leftmenu.html',
      1 => 1484114075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a30c8ac27bea9_04248600 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="index.php?controller=admin&method=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="index.php?controller=admin&method=newslist">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="index.php?controller=admin&method=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }
}
