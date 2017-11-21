<?php
/* Smarty version 3.1.29, created on 2017-11-21 18:06:49
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1441096f11d2_44950627',
  'file_dependency' => 
  array (
    '488aa95ecdb5b358f8627c023af1093f29186ea0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\index.tpl',
      1 => 1511276808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a1441096f11d2_44950627 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\OpenServer\\domains\\Newsletter.mgutu\\engine\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Панель управления", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui grid">
	<div class="row">
		<div class="sixteen wide column">
            <div class="ui top attached tabular menu">
              <a class="active item" data-tab="schedule">Расписание</a>
              <a class="item" data-tab="notes">Объявления</a>
			  <div class="right menu">
				<form name="logoutForm" method="POST">				
					<input type="submit" class="item" name="logoutButton" value="Выйти">
				</form>
			  </div>
            </div>
            <div class="ui bottom attached active tab segment" data-tab="schedule">
				<div class="ui internally celled grid">
					<div class="row">
						<div class="sixteen wide column">
                            <form name="saveScheduleForm" method="POST" class="ui form">
								<div class="field">
									<input type="submit" name="saveScheduleButton" value="Сохранить" class="ui primary button">
								</div>
								<div class="field">
									<table class="ui fixed table">
										<thead>
											<tr>
												<th>Показать/скрыть</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
												<th>
													<div class="ui checkbox">
														<input type="checkbox">
														<label></label>
													</div>
												</th>
											</tr>
											<tr>
												<th>
													
												</th>
												<th>104</th>
												<th>107</th>
												<th>109</th>
												<th>207</th>
												<th>209</th>
												<th>201</th>
												<th>300</th>
												<th>400</th>
												<th>401 (мал. акт. зал)</th>
												<th>405</th>
												<th>406</th>
												<th>409</th>
												<th>Актовый зал</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td colspan="14"><h2 class="date"><input type="date"></h2></td>
											</tr>
											<?php
$_from = $_smarty_tpl->tpl_vars['schedule']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$__foreach_data_0_saved_key = isset($_smarty_tpl->tpl_vars['time']) ? $_smarty_tpl->tpl_vars['time'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['time'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['time']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
												<tr>
													<td><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</td>
													<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_1_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_1_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
														<td><textarea name="schedule[]"><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</textarea></td>
													<?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_local_item;
}
if ($__foreach_entry_1_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_item;
}
?>
												</tr>
											<?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_item;
}
if ($__foreach_data_0_saved_key) {
$_smarty_tpl->tpl_vars['time'] = $__foreach_data_0_saved_key;
}
?>
										</tbody>
									</table>
								</div>
                            </form>
						</div>
					</div>
				</div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="notes">
				<div class="ui stackable grid">
					<div class="row">
						<div class="ten wide column">
							<?php if ($_smarty_tpl->tpl_vars['notes']->value != NULL) {?>
								<table class="ui table">
									<thead>
										<tr>
											<th>№</th>
											<th>Заголовок</th>
											<th>Дата</th>
											<th>Выбрать</th>
										</tr>
									</thead>
									<tbody>
										<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
										<?php
$_from = $_smarty_tpl->tpl_vars['notes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_note_2_saved_item = isset($_smarty_tpl->tpl_vars['note']) ? $_smarty_tpl->tpl_vars['note'] : false;
$_smarty_tpl->tpl_vars['note'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['note']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
$__foreach_note_2_saved_local_item = $_smarty_tpl->tpl_vars['note'];
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['note']->value->caption();?>
</td>
												<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['note']->value->date(),"%d.%m.%Y");?>
</td>
												<td>
													<div class="ui checkbox">
														<input type="checkbox" name="notes[]">
														<label></label>
													</div>
												</td>
											</tr>
											<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
										<?php
$_smarty_tpl->tpl_vars['note'] = $__foreach_note_2_saved_local_item;
}
if ($__foreach_note_2_saved_item) {
$_smarty_tpl->tpl_vars['note'] = $__foreach_note_2_saved_item;
}
?>
									</tbody>
								</table>
							<?php } else { ?>
								<h1 align="center">Объявлений нет</h1>
							<?php }?>
						</div>
						<div class="six wide column">
							<fieldset>
								<legend>Добавление Объявления</legend>
								<form name="addNoteForm" class="ui form" method="POST">
									<div class="field">
										<label>Заголовок</label>
										<input type="text" name="caption">
									</div>
									<div class="field">
										<label>Содержание</label>
										<textarea name="content"></textarea>
									</div>
									<div class="field">
										<label>Дата</label>
										<input type="date" name="date">
									</div>
									<div class="field">
										<input type="submit" name="addNoteButton" value="Добавить" class="ui primary button">
									</div>
								</form>
							</fieldset>
						</div>
					</div>
				</div>
            </div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
