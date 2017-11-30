<?php
/* Smarty version 3.1.29, created on 2017-11-30 15:42:15
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1ffca78a7c69_85709150',
  'file_dependency' => 
  array (
    'b7ca3e1d7d983b95da762128261231320d19fdf7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.main_schedule.tpl',
      1 => 1512045734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1ffca78a7c69_85709150 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\OpenServer\\domains\\Newsletter.mgutu\\engine\\smarty\\plugins\\modifier.date_format.php';
?>
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
</div><?php }
}
