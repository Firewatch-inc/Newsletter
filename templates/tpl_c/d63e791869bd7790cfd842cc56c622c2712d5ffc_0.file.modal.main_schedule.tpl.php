<?php
/* Smarty version 3.1.29, created on 2017-11-30 20:25:22
  from "/var/www/html/templates/tpl/modals/modal.main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a203f02f12822_66978347',
  'file_dependency' => 
  array (
    'd63e791869bd7790cfd842cc56c622c2712d5ffc' => 
    array (
      0 => '/var/www/html/templates/tpl/modals/modal.main_schedule.tpl',
      1 => 1512062309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a203f02f12822_66978347 ($_smarty_tpl) {
?>
<div class="ui modal" id="main_schedule">
    <div class="header">
        Основное расписание
    </div>
    <div class="content">
        <form class="ui form">
            <?php if ($_smarty_tpl->tpl_vars['institutes']->value != NULL && $_smarty_tpl->tpl_vars['courses']->value != NULL && $_smarty_tpl->tpl_vars['groups']->value != NULL) {?>
                <div class="field">
                    <label>Институт</label>
                    <select name="institute">
                        <?php
$_from = $_smarty_tpl->tpl_vars['institutes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_institute_0_saved_item = isset($_smarty_tpl->tpl_vars['institute']) ? $_smarty_tpl->tpl_vars['institute'] : false;
$_smarty_tpl->tpl_vars['institute'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['institute']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['institute']->value) {
$_smarty_tpl->tpl_vars['institute']->_loop = true;
$__foreach_institute_0_saved_local_item = $_smarty_tpl->tpl_vars['institute'];
?>
                            <option><?php echo $_smarty_tpl->tpl_vars['institute']->value->caption();?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_0_saved_local_item;
}
if ($__foreach_institute_0_saved_item) {
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_0_saved_item;
}
?>
                    </select>
                </div>
                <div class="field">
                    <label>Курс</label>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="field">
                    <label>Группа</label>
                    <select>
                        <option>16.03.03</option>
                    </select>
                </div>
                <div class="field" style="text-align: center;">
                    <input type="submit" name="showSchedule" value="Показать" class="ui primary button">
                </div>
            <?php } else { ?>
                <h3 align="center">На данный момент расписание не доступно</h3>
            <?php }?>
        </form>
    </div>
</div><?php }
}
