<?php
/* Smarty version 3.1.29, created on 2018-02-04 15:14:45
  from "E:\OpenServer\domains\Newsletter.mgutm\admin\templates\tpl\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a76f93552f0d7_65128165',
  'file_dependency' => 
  array (
    '9adb7a33866255060e9030cc462c74ec743179ff' => 
    array (
      0 => 'E:\\OpenServer\\domains\\Newsletter.mgutm\\admin\\templates\\tpl\\login.tpl',
      1 => 1511984403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a76f93552f0d7_65128165 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Admin Panel", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui center aligned grid">
	<div class="column" style="width: 350px; height: 100vh; display: flex; flex-direction: column; justify-content: center;">
		<h2 class="ui orange image header">
			<div class="content">
				Newsletter
			</div>
		</h2>
		<form name="loginForm" method="POST" class="ui form">
			<div class="ui segment">
				<div class="field">
					<div class="ui left icon input">
						<i class="mail icon"></i>
						<input type="text" name="login" placeholder="Логин" required>
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
						<i class="lock icon"></i>
						<input type="password" name="passwd" placeholder="Пароль" required>
					</div>
				</div>
				<input type="submit" name="loginButton" value="Войти" class="ui fluid large primary button">
			</div>
		</form>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
