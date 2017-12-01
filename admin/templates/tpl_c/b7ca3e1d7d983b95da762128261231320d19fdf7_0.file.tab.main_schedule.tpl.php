<?php
/* Smarty version 3.1.29, created on 2017-12-01 17:47:06
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a216b6a6d74c7_15509500',
  'file_dependency' => 
  array (
    'b7ca3e1d7d983b95da762128261231320d19fdf7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.main_schedule.tpl',
      1 => 1512139625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a216b6a6d74c7_15509500 ($_smarty_tpl) {
?>
<form name="saveMainScheduleForm" method="POST" class="ui form">
    <datalist id="subjects">
        <?php
$_from = $_smarty_tpl->tpl_vars['subjects']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_subject_0_saved_item = isset($_smarty_tpl->tpl_vars['subject']) ? $_smarty_tpl->tpl_vars['subject'] : false;
$_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['subject']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->_loop = true;
$__foreach_subject_0_saved_local_item = $_smarty_tpl->tpl_vars['subject'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['subject']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value->caption();?>
</option>
        <?php
$_smarty_tpl->tpl_vars['subject'] = $__foreach_subject_0_saved_local_item;
}
if ($__foreach_subject_0_saved_item) {
$_smarty_tpl->tpl_vars['subject'] = $__foreach_subject_0_saved_item;
}
?>
    </datalist>
    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <div class="three fields">
                    <div class="field">
                        <label>Институт</label>
                        <select>
                            <?php
$_from = $_smarty_tpl->tpl_vars['institutes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_institute_1_saved_item = isset($_smarty_tpl->tpl_vars['institute']) ? $_smarty_tpl->tpl_vars['institute'] : false;
$_smarty_tpl->tpl_vars['institute'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['institute']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['institute']->value) {
$_smarty_tpl->tpl_vars['institute']->_loop = true;
$__foreach_institute_1_saved_local_item = $_smarty_tpl->tpl_vars['institute'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['institute']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['institute']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_1_saved_local_item;
}
if ($__foreach_institute_1_saved_item) {
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_1_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Учебный курс</label>
                        <select>
                            <?php
$_from = $_smarty_tpl->tpl_vars['educationCourses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_educationCourse_2_saved_item = isset($_smarty_tpl->tpl_vars['educationCourse']) ? $_smarty_tpl->tpl_vars['educationCourse'] : false;
$_smarty_tpl->tpl_vars['educationCourse'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['educationCourse']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['educationCourse']->value) {
$_smarty_tpl->tpl_vars['educationCourse']->_loop = true;
$__foreach_educationCourse_2_saved_local_item = $_smarty_tpl->tpl_vars['educationCourse'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->number();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_2_saved_local_item;
}
if ($__foreach_educationCourse_2_saved_item) {
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_2_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Группа</label>
                        <select>
                            <?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_group_3_saved_item = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group'] : false;
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$__foreach_group_3_saved_local_item = $_smarty_tpl->tpl_vars['group'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_3_saved_local_item;
}
if ($__foreach_group_3_saved_item) {
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_3_saved_item;
}
?>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <input type="submit" name="selectGroupScheduleButton" value="Выбрать" class="ui primary button">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">                
                <?php
$_from = $_smarty_tpl->tpl_vars['days']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_day_4_saved_item = isset($_smarty_tpl->tpl_vars['day']) ? $_smarty_tpl->tpl_vars['day'] : false;
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$__foreach_day_4_saved_local_item = $_smarty_tpl->tpl_vars['day'];
?>
                    <div class="ui styled accordion">
                        <div class="title">
                            <?php echo $_smarty_tpl->tpl_vars['day']->value->caption();?>

                        </div>
                        <div class="content">
                            <table class="ui fixed table">
                                <thead>
                                    <tr>
                                        <th>Пара</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['pairs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pair_5_saved_item = isset($_smarty_tpl->tpl_vars['pair']) ? $_smarty_tpl->tpl_vars['pair'] : false;
$_smarty_tpl->tpl_vars['pair'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pair']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->_loop = true;
$__foreach_pair_5_saved_local_item = $_smarty_tpl->tpl_vars['pair'];
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['pair']->value->number();?>
 (<?php echo $_smarty_tpl->tpl_vars['pair']->value->startTime();?>
 - <?php echo $_smarty_tpl->tpl_vars['pair']->value->endTime();?>
)</td>
                                            <td>
                                                <div class="two fields">
                                                    <div class="field">
                                                        <input type="text" list="subjects">
                                                    </div>
                                                    <div class="field">
                                                        <input type="text" list="subjects">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text">
                                            </td>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_5_saved_local_item;
}
if ($__foreach_pair_5_saved_item) {
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_5_saved_item;
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_4_saved_local_item;
}
if ($__foreach_day_4_saved_item) {
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_4_saved_item;
}
?>
            </div>
        </div>
    </div>
</form><?php }
}
