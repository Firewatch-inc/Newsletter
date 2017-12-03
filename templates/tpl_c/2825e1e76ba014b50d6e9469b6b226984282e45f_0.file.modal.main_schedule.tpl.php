<?php
/* Smarty version 3.1.29, created on 2017-12-03 12:47:13
  from "E:\OpenServer\domains\Newsletter.mgutm\templates\tpl\modals\modal.main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a23c8212e3681_28685608',
  'file_dependency' => 
  array (
    '2825e1e76ba014b50d6e9469b6b226984282e45f' => 
    array (
      0 => 'E:\\OpenServer\\domains\\Newsletter.mgutm\\templates\\tpl\\modals\\modal.main_schedule.tpl',
      1 => 1512294432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23c8212e3681_28685608 ($_smarty_tpl) {
?>
<div class="ui modal" id="main_schedule">
    <div class="header">
        Основное расписание
    </div>
    <div class="content">
        <form name="showMainScheduleForm" method="POST" class="ui form">
            <?php if ($_smarty_tpl->tpl_vars['institutes']->value != NULL && $_smarty_tpl->tpl_vars['courses']->value != NULL && $_smarty_tpl->tpl_vars['groups']->value != NULL) {?>
                <div class="field">
                    <label>Институт</label>
                    <input type="hidden" name="institute_caption" value="">
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
                    <select name="education_course" required>
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
                    <select name="group" required></select>
                </div>
                <div class="field">
                    <label>Форма обучения</label>
                    <select name="education_form" required>
                        <?php
$_from = $_smarty_tpl->tpl_vars['educationForms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_educationForm_2_saved_item = isset($_smarty_tpl->tpl_vars['educationForm']) ? $_smarty_tpl->tpl_vars['educationForm'] : false;
$_smarty_tpl->tpl_vars['educationForm'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['educationForm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['educationForm']->value) {
$_smarty_tpl->tpl_vars['educationForm']->_loop = true;
$__foreach_educationForm_2_saved_local_item = $_smarty_tpl->tpl_vars['educationForm'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['educationForm']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['educationForm']->value->caption();?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_2_saved_local_item;
}
if ($__foreach_educationForm_2_saved_item) {
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_2_saved_item;
}
?>
                    </select>
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
