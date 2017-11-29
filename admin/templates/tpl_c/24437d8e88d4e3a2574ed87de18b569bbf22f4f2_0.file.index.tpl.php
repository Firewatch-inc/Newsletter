<?php
/* Smarty version 3.1.29, created on 2017-11-28 18:42:14
  from "/var/www/html/admin/templates/tpl/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1d83d66fe9b6_56978824',
  'file_dependency' => 
  array (
    '24437d8e88d4e3a2574ed87de18b569bbf22f4f2' => 
    array (
      0 => '/var/www/html/admin/templates/tpl/index.tpl',
      1 => 1511883691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a1d83d66fe9b6_56978824 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/engine/smarty/plugins/modifier.date_format.php';
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
			  <a class="item" data-tab="settings">Настройки</a>
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
							<?php if ($_smarty_tpl->tpl_vars['schedule']->value != NULL) {?>
								<?php
$_from = $_smarty_tpl->tpl_vars['schedule']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$__foreach_data_0_saved_key = isset($_smarty_tpl->tpl_vars['date']) ? $_smarty_tpl->tpl_vars['date'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['date'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
									<div class="ui styled accordion" style="width: 100%;">
										<div class="title">
											<?php $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable((explode("_",$_smarty_tpl->tpl_vars['date']->value)), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'date', 0);?>
											<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value[0],"%d.%m.%Y");?>

										</div>
										<div class="content">
											<form name="saveScheduleForm" method="POST" class="ui form">
												<input type="hidden" name="schedule_id" value="<?php echo $_smarty_tpl->tpl_vars['date']->value[1];?>
">
												<div class="field">
													<input type="submit" name="saveScheduleButton" value="Сохранить" class="ui primary button">
												</div>
												<div class="field">
													<table class="ui fixed table">
														<thead><!--
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
															</tr>-->
															<tr>
																<th></th>
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
																<td colspan="14"><h2 class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value[0],"%d.%m.%Y");?>
</h2></td>
															</tr>
															<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_one_entry_1_saved_item = isset($_smarty_tpl->tpl_vars['one_entry']) ? $_smarty_tpl->tpl_vars['one_entry'] : false;
$__foreach_one_entry_1_saved_key = isset($_smarty_tpl->tpl_vars['time']) ? $_smarty_tpl->tpl_vars['time'] : false;
$_smarty_tpl->tpl_vars['one_entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['time'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['one_entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['time']->value => $_smarty_tpl->tpl_vars['one_entry']->value) {
$_smarty_tpl->tpl_vars['one_entry']->_loop = true;
$__foreach_one_entry_1_saved_local_item = $_smarty_tpl->tpl_vars['one_entry'];
?>
																<tr>
																	<td><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</td>
																	<?php if ($_smarty_tpl->tpl_vars['one_entry']->value != NULL) {?>
																		<?php
$_from = $_smarty_tpl->tpl_vars['one_entry']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_2_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_2_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
																			<td><textarea name="schedule[]"><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</textarea></td>
																		<?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_2_saved_local_item;
}
if ($__foreach_entry_2_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_2_saved_item;
}
?>
																	<?php } else { ?>
																		<?php $_smarty_tpl->tpl_vars['columns'] = new Smarty_Variable(array(1,2,3,4,5,6,7,8,9,10,11,12,13), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'columns', 0);?>
																		<?php
$_from = $_smarty_tpl->tpl_vars['columns']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_column_3_saved_item = isset($_smarty_tpl->tpl_vars['column']) ? $_smarty_tpl->tpl_vars['column'] : false;
$_smarty_tpl->tpl_vars['column'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['column']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
$__foreach_column_3_saved_local_item = $_smarty_tpl->tpl_vars['column'];
?>
																			<td><textarea name="schedule[]"></textarea></td>
																		<?php
$_smarty_tpl->tpl_vars['column'] = $__foreach_column_3_saved_local_item;
}
if ($__foreach_column_3_saved_item) {
$_smarty_tpl->tpl_vars['column'] = $__foreach_column_3_saved_item;
}
?>
																	<?php }?>
																</tr>
															<?php
$_smarty_tpl->tpl_vars['one_entry'] = $__foreach_one_entry_1_saved_local_item;
}
if ($__foreach_one_entry_1_saved_item) {
$_smarty_tpl->tpl_vars['one_entry'] = $__foreach_one_entry_1_saved_item;
}
if ($__foreach_one_entry_1_saved_key) {
$_smarty_tpl->tpl_vars['time'] = $__foreach_one_entry_1_saved_key;
}
?>
														</tbody>
													</table>
												</div>
											</form>
										</div>
									</div>
								<?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_item;
}
if ($__foreach_data_0_saved_key) {
$_smarty_tpl->tpl_vars['date'] = $__foreach_data_0_saved_key;
}
?>
							<?php }?>
						</div>
					</div>
				</div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="notes">
				<div class="ui stackable grid">
					<div class="row">
						<div class="ten wide column">
							<?php if ($_smarty_tpl->tpl_vars['notes']->value != NULL) {?>
								<form name="removeNotesForm" method="POST">
									<div class="actions">
										<input type="submit" name="removeNoteButton" value="Удалить" class="ui red button">
									</div>
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
$__foreach_note_4_saved_item = isset($_smarty_tpl->tpl_vars['note']) ? $_smarty_tpl->tpl_vars['note'] : false;
$_smarty_tpl->tpl_vars['note'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['note']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
$__foreach_note_4_saved_local_item = $_smarty_tpl->tpl_vars['note'];
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
															<input type="checkbox" name="notes[]" value="<?php echo $_smarty_tpl->tpl_vars['note']->value->id();?>
">
															<label></label>
														</div>
													</td>
												</tr>
												<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
											<?php
$_smarty_tpl->tpl_vars['note'] = $__foreach_note_4_saved_local_item;
}
if ($__foreach_note_4_saved_item) {
$_smarty_tpl->tpl_vars['note'] = $__foreach_note_4_saved_item;
}
?>
										</tbody>
									</table>
								</form>
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
										<input type="text" name="caption" required>
									</div>
									<div class="field">
										<label>Содержание</label>
										<textarea name="content" required></textarea>
									</div>
									<div class="field">
										<label>Дата</label>
										<input type="date" name="date" required>
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
			<div class="ui bottom attached tab segment" data-tab="settings">
				<form name="saveSettings" method="POST" class="ui form">
					<div class="two fields">
						<div class="field">
							<div class="two fields">
								<div class="field">
									<select name="updateInterval">
										<?php if ($_smarty_tpl->tpl_vars['settings']->value['update_interval'] == 0) {?>
											<option value="0">Не обновлять</option>
											<option value="5">5 минут</option>
											<option value="15">15 минут</option>
										<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['update_interval'] == 5) {?>
											<option value="5">5 минут</option>
											<option value="0">Не обновлять</option>
											<option value="15">15 минут</option>
										<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['update_interval'] == 15) {?>
										<option value="15">15 минут</option>
											<option value="5">5 минут</option>
											<option value="0">Не обновлять</option>
										<?php }?>
									</select>
								</div>
								<div class="field">
									<input type="submit" name="setUpdateIntervalButton" value="Задать интервал обновления" class="ui button">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
