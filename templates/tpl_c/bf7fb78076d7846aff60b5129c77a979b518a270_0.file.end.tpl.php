<?php
/* Smarty version 3.1.29, created on 2017-11-29 17:30:12
  from "/var/www/html/templates/tpl/html/end.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1ec4747a4164_36024193',
  'file_dependency' => 
  array (
    'bf7fb78076d7846aff60b5129c77a979b518a270' => 
    array (
      0 => '/var/www/html/templates/tpl/html/end.tpl',
      1 => 1511965807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1ec4747a4164_36024193 ($_smarty_tpl) {
?>
    <?php echo '<script'; ?>
 type="text/javascript">
	
		history.pushState(null, null, location.href);
		window.onpopstate = function (event) {
			history.go(1);	
		};

		window.oncontextmenu = function () {
			return false;
		};

	<?php echo '</script'; ?>
>

	</body>
</html>
<?php }
}
