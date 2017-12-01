<?php
/* Smarty version 3.1.29, created on 2017-12-01 18:09:14
  from "C:\OpenServer\domains\Newsletter.mgutu\templates\tpl\modals\modal.main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a21709a42eba3_76871663',
  'file_dependency' => 
  array (
    '4b9d195da8fc5cbe9e09eaf969e8ee1a8ad0641c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\templates\\tpl\\modals\\modal.main_schedule.tpl',
      1 => 1512140953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a21709a42eba3_76871663 ($_smarty_tpl) {
?>
<div class="ui modal" id="main_schedule">
    <div class="header">
        Основное расписание
    </div>
    <div class="content">
        <form name="showMainScheduleForm" class="ui form">
            <?php if ($_smarty_tpl->tpl_vars['institutes']->value != NULL && $_smarty_tpl->tpl_vars['courses']->value != NULL && $_smarty_tpl->tpl_vars['groups']->value != NULL) {?>
                <div class="field">
                    <label>Институт</label>
                    <select name="institute" required>
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['institute']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['institute']->value->caption();?>
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
                    <select name="educationCourse" required>
                        <?php
$_from = $_smarty_tpl->tpl_vars['educationCourses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_educationCourse_1_saved_item = isset($_smarty_tpl->tpl_vars['educationCourse']) ? $_smarty_tpl->tpl_vars['educationCourse'] : false;
$_smarty_tpl->tpl_vars['educationCourse'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['educationCourse']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['educationCourse']->value) {
$_smarty_tpl->tpl_vars['educationCourse']->_loop = true;
$__foreach_educationCourse_1_saved_local_item = $_smarty_tpl->tpl_vars['educationCourse'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->number();?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_1_saved_local_item;
}
if ($__foreach_educationCourse_1_saved_item) {
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_1_saved_item;
}
?>
                    </select>
                </div>
                <div class="field">
                    <label>Группа</label>
                    <select name="group" required>
                        <?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_group_2_saved_item = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group'] : false;
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$__foreach_group_2_saved_local_item = $_smarty_tpl->tpl_vars['group'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->caption();?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_2_saved_local_item;
}
if ($__foreach_group_2_saved_item) {
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_2_saved_item;
}
?>
                    </select>
                </div>
                <div class="field">
                    <label>Форма обучения</label>
                    <div class="three fields">
                        <?php
$_from = $_smarty_tpl->tpl_vars['educationForms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_educationForm_3_saved_item = isset($_smarty_tpl->tpl_vars['educationForm']) ? $_smarty_tpl->tpl_vars['educationForm'] : false;
$_smarty_tpl->tpl_vars['educationForm'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['educationForm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['educationForm']->value) {
$_smarty_tpl->tpl_vars['educationForm']->_loop = true;
$__foreach_educationForm_3_saved_local_item = $_smarty_tpl->tpl_vars['educationForm'];
?>
                            <div class="field">
                                <div class="ui toggle checkbox">
                                    <input type="radio" name="educationForm" value="<?php echo $_smarty_tpl->tpl_vars['educationForm']->value->id();?>
" required>
                                    <label><?php echo $_smarty_tpl->tpl_vars['educationForm']->value->caption();?>
</label>
                                </div>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_3_saved_local_item;
}
if ($__foreach_educationForm_3_saved_item) {
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_3_saved_item;
}
?>
                    </div>
                </div>
            <?php } else { ?>
                <h3 align="center">На данный момент расписание не доступно</h3>
            <?php }?>
            <div class="field" style="text-align: center;">
                <input type="submit" name="showMainScheduleButton" value="Показать" id="showMainSchedule"  class="ui primary button">
            </div>
        </form>
    </div>
</div><?php }
}
