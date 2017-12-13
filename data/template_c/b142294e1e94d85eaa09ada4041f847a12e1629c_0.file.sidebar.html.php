<?php
/* Smarty version 3.1.30, created on 2017-12-13 14:28:02
  from "E:\xampp\htdocs\tpl\index\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a30c872b62109_87447280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b142294e1e94d85eaa09ada4041f847a12e1629c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\tpl\\index\\sidebar.html',
      1 => 1484114075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a30c872b62109_87447280 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="post" action="index.php?controller=index&method=search">
					<fieldset>
					<input type="text" id="s" name="key" value=""  style="border:1px solid grey"/>
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
<?php }
}
