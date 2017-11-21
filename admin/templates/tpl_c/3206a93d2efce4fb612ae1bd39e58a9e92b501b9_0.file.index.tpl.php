<?php
/* Smarty version 3.1.29, created on 2017-11-11 21:43:00
  from "E:\OpenServer\domains\Newsletter.mgutm\src\admin\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0744b46918f5_65359778',
  'file_dependency' => 
  array (
    '3206a93d2efce4fb612ae1bd39e58a9e92b501b9' => 
    array (
      0 => 'E:\\OpenServer\\domains\\Newsletter.mgutm\\src\\admin\\templates\\tpl\\index.tpl',
      1 => 1510425779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a0744b46918f5_65359778 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Вход в панель администратора", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui grid">
	<div class="row">
		<div class="sixteen wide column">
            <div class="ui top attached tabular menu">
              <a class="active item" data-tab="news">Новости</a>
              <a class="item" data-tab="notes">Заметки</a>
			  <div class="right menu">
				<form name="logoutForm" method="POST">				
					<input type="submit" class="item" name="logoutButton" value="Выйти">
				</form>
			  </div>
            </div>
            <div class="ui bottom attached active tab segment" data-tab="news">
				<div class="ui internally celled grid">
					<div class="row">
						<div class="ten wide column">
							<div class="actions">
								<input type="submit">
							</div>
							<table class="ui table">
								<thead>
									<tr>
										<th>№</th>
										<th>Загловок</th>
										<th>Автор</th>
										<th>Дата</th>
										<th>Выбрать</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Супер пупер</td>
										<td>Кул А.Н.</td>
										<td>01.01.2017</td>
										<td style="text-align: center;">
											<div class="ui checkbox">
												<input type="checkbox">
												<label></label>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="six wide column">
							<div class="ui segments">
								<div class="ui segment">
									<form class="ui form">
										<div class="field">
											<label>Заголовок</label>
											<input type="text">
										</div>
										<div class="field">
											<label>Автор</label>
											<input type="text">
										</div>
										<div class="field">
											<label>Содержание</label>
											<textarea></textarea>
										</div>
										<div class="field">
											<label>Дата</label>
											<input type="date">
										</div>
										<div class="field">
											<input type="submit" class="ui basic positive button">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="notes">
				Notes
            </div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
