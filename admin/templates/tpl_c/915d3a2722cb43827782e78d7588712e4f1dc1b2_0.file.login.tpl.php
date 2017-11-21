<?php
/* Smarty version 3.1.29, created on 2017-11-12 22:20:11
  from "C:\OpenServer\domains\Newsletter\src\admin\templates\tpl\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a089eebeff833_55095759',
  'file_dependency' => 
  array (
    '915d3a2722cb43827782e78d7588712e4f1dc1b2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter\\src\\admin\\templates\\tpl\\login.tpl',
      1 => 1510514411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a089eebeff833_55095759 ($_smarty_tpl) {
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

<!--

<div class="ui grid">
	<div class="row">
		<div class="six wide column">
		
		</div>
		<div class="four wide column">
			<br><br><br>
			<form name="loginForm" method="POST" class="ui form">
				<div class="field">
					<label>Логин:</label>
					<input type="text" name="login" required>
				</div>
				<div class="field">
					<label>Пароль:</label>
					<input type="password" name="passwd" required>
				</div>
				<div class="field">
					<input type="submit" name="loginButton" value="Войти" class="ui basic primary button">
				</div>
			</form>
		</div>
		<div class="six wide column">
			
		</div>
	</div>
</div>

-->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
