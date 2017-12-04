<?php
/* Smarty version 3.1.29, created on 2017-12-04 10:57:01
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.groups.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a24ffcde3d536_70582003',
  'file_dependency' => 
  array (
    '05a802afe14ab62b6771c412744cda924a1269e1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.groups.tpl',
      1 => 1512374220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a24ffcde3d536_70582003 ($_smarty_tpl) {
?>
<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            <?php if ($_smarty_tpl->tpl_vars['groups']->value != NULL) {?>
                <form name="removeCoursesForm" method="POST">
                    <div class="actions">
                        <input type="submit" name="removeCourseButton" value="Удалить" class="ui red button">
                    </div>
                    <?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_group_0_saved_item = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group'] : false;
$__foreach_group_0_saved_key = isset($_smarty_tpl->tpl_vars['institute']) ? $_smarty_tpl->tpl_vars['institute'] : false;
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['institute'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['institute']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$__foreach_group_0_saved_local_item = $_smarty_tpl->tpl_vars['group'];
?>
                        <fieldset>
                            <legend><b><?php echo $_smarty_tpl->tpl_vars['institute']->value;?>
</b></legend>
                            <table class="ui table">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Шифр группы</th>
                                        <th>Специальность</th>
                                        <th>Форма обучения</th>
                                        <th>Курс</th>
                                        <th>Выбрать</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['group']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_g_1_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_g_1_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['g']->value->caption();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['g']->value->specialty();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['g']->value->educationForm();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['g']->value->educationCourse();?>
</td>
                                            <td>
                                                <div class="ui checkbox">
                                                    <input type="checkbox" name="groups[]" value="<?php echo $_smarty_tpl->tpl_vars['g']->value->id();?>
">
                                                    <label></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                                    <?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_1_saved_local_item;
}
if ($__foreach_g_1_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_1_saved_item;
}
?>
                                </tbody>
                            </table>
                        </fieldset>
                    <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_0_saved_local_item;
}
if ($__foreach_group_0_saved_item) {
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_0_saved_item;
}
if ($__foreach_group_0_saved_key) {
$_smarty_tpl->tpl_vars['institute'] = $__foreach_group_0_saved_key;
}
?>
                </form>
            <?php } else { ?>
                <h1 align="center">Групп нет</h1>
            <?php }?>
        </div>
        <div class="six wide column">
            <fieldset>
                <legend><b>Добавление группы</b></legend>
                <form name="addCourseForm" class="ui form" method="POST">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <label>Специализация</label>
                        <select name="specialty">
                            <?php
$_from = $_smarty_tpl->tpl_vars['specialties']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_specialty_2_saved_item = isset($_smarty_tpl->tpl_vars['specialty']) ? $_smarty_tpl->tpl_vars['specialty'] : false;
$_smarty_tpl->tpl_vars['specialty'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['specialty']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['specialty']->value) {
$_smarty_tpl->tpl_vars['specialty']->_loop = true;
$__foreach_specialty_2_saved_local_item = $_smarty_tpl->tpl_vars['specialty'];
?>
                                <option></option>
                            <?php
$_smarty_tpl->tpl_vars['specialty'] = $__foreach_specialty_2_saved_local_item;
}
if ($__foreach_specialty_2_saved_item) {
$_smarty_tpl->tpl_vars['specialty'] = $__foreach_specialty_2_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Форма обучения</label>
                        <select name="educationForm">
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
                                <option value="<?php echo $_smarty_tpl->tpl_vars['educationForm']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['educationForm']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_3_saved_local_item;
}
if ($__foreach_educationForm_3_saved_item) {
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_3_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Курс</label>
                        <select name="educationCourse">
                            <?php
$_from = $_smarty_tpl->tpl_vars['educationCourses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_educationCourse_4_saved_item = isset($_smarty_tpl->tpl_vars['educationCourse']) ? $_smarty_tpl->tpl_vars['educationCourse'] : false;
$_smarty_tpl->tpl_vars['educationCourse'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['educationCourse']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['educationCourse']->value) {
$_smarty_tpl->tpl_vars['educationCourse']->_loop = true;
$__foreach_educationCourse_4_saved_local_item = $_smarty_tpl->tpl_vars['educationCourse'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->number();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_4_saved_local_item;
}
if ($__foreach_educationCourse_4_saved_item) {
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_4_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <input type="submit" name="addCourseButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div><?php }
}
