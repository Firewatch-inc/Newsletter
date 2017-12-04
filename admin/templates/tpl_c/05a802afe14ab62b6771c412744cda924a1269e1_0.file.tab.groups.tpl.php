<?php
/* Smarty version 3.1.29, created on 2017-12-04 15:22:13
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.groups.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a253df5cdc796_35086824',
  'file_dependency' => 
  array (
    '05a802afe14ab62b6771c412744cda924a1269e1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.groups.tpl',
      1 => 1512390132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a253df5cdc796_35086824 ($_smarty_tpl) {
?>
<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            <?php if ($_smarty_tpl->tpl_vars['groups']->value != NULL) {?>
                <form name="removeGroupsForm" method="POST" class="ui form">
                    <div class="field">
                        <div class="actions"> <!--  -->
                            <input type="submit" name="removeGroupButton" value="Удалить" class="ui red button" style="width: 100%">
                        </div>
                    </div>
                    <div class="field">
                        <?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_courses_0_saved_item = isset($_smarty_tpl->tpl_vars['courses']) ? $_smarty_tpl->tpl_vars['courses'] : false;
$__foreach_courses_0_saved_key = isset($_smarty_tpl->tpl_vars['institute']) ? $_smarty_tpl->tpl_vars['institute'] : false;
$_smarty_tpl->tpl_vars['courses'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['institute'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['courses']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['institute']->value => $_smarty_tpl->tpl_vars['courses']->value) {
$_smarty_tpl->tpl_vars['courses']->_loop = true;
$__foreach_courses_0_saved_local_item = $_smarty_tpl->tpl_vars['courses'];
?>
                            <fieldset>
                                <legend><b><?php echo $_smarty_tpl->tpl_vars['institute']->value;?>
</b></legend>
                                <?php
$_from = $_smarty_tpl->tpl_vars['courses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groups_1_saved_item = isset($_smarty_tpl->tpl_vars['groups']) ? $_smarty_tpl->tpl_vars['groups'] : false;
$__foreach_groups_1_saved_key = isset($_smarty_tpl->tpl_vars['course']) ? $_smarty_tpl->tpl_vars['course'] : false;
$_smarty_tpl->tpl_vars['groups'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['course'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['groups']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['course']->value => $_smarty_tpl->tpl_vars['groups']->value) {
$_smarty_tpl->tpl_vars['groups']->_loop = true;
$__foreach_groups_1_saved_local_item = $_smarty_tpl->tpl_vars['groups'];
?>
                                    <fieldset>
                                        <legend><u><?php echo $_smarty_tpl->tpl_vars['course']->value;?>
</u> курс</legend>
                                        <table class="ui table">
                                            <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>Шифр группы</th>
                                                <th>Специальность</th>
                                                <th>Форма обучения</th>
                                                <th>Выбрать</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_g_2_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_g_2_saved_local_item = $_smarty_tpl->tpl_vars['g'];
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
                                                    <td style="text-align: center"> <!-- FIXME:  -->
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
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_2_saved_local_item;
}
if ($__foreach_g_2_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_2_saved_item;
}
?>
                                            </tbody>
                                        </table>
                                    </fieldset>
                                <?php
$_smarty_tpl->tpl_vars['groups'] = $__foreach_groups_1_saved_local_item;
}
if ($__foreach_groups_1_saved_item) {
$_smarty_tpl->tpl_vars['groups'] = $__foreach_groups_1_saved_item;
}
if ($__foreach_groups_1_saved_key) {
$_smarty_tpl->tpl_vars['course'] = $__foreach_groups_1_saved_key;
}
?>
                            </fieldset>
                            <br>
                        <?php
$_smarty_tpl->tpl_vars['courses'] = $__foreach_courses_0_saved_local_item;
}
if ($__foreach_courses_0_saved_item) {
$_smarty_tpl->tpl_vars['courses'] = $__foreach_courses_0_saved_item;
}
if ($__foreach_courses_0_saved_key) {
$_smarty_tpl->tpl_vars['institute'] = $__foreach_courses_0_saved_key;
}
?>
                    </div>
                </form>
            <?php } else { ?>
                <h1 align="center">Групп нет</h1>
            <?php }?>
        </div>
        <div class="six wide column">
            <fieldset>
                <legend><b>Добавление группы</b></legend>
                <form name="addGroupForm" method="POST" class="ui form">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <label>Институты</label>
                        <select name="institute">
                            <?php
$_from = $_smarty_tpl->tpl_vars['institutes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_institute_3_saved_item = isset($_smarty_tpl->tpl_vars['institute']) ? $_smarty_tpl->tpl_vars['institute'] : false;
$_smarty_tpl->tpl_vars['institute'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['institute']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['institute']->value) {
$_smarty_tpl->tpl_vars['institute']->_loop = true;
$__foreach_institute_3_saved_local_item = $_smarty_tpl->tpl_vars['institute'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['institute']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['institute']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_3_saved_local_item;
}
if ($__foreach_institute_3_saved_item) {
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_3_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Специализация</label>
                        <select name="specialty">
                            <?php
$_from = $_smarty_tpl->tpl_vars['specialties']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_specialty_4_saved_item = isset($_smarty_tpl->tpl_vars['specialty']) ? $_smarty_tpl->tpl_vars['specialty'] : false;
$_smarty_tpl->tpl_vars['specialty'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['specialty']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['specialty']->value) {
$_smarty_tpl->tpl_vars['specialty']->_loop = true;
$__foreach_specialty_4_saved_local_item = $_smarty_tpl->tpl_vars['specialty'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['specialty']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['specialty']->value->code();?>
 | <?php echo $_smarty_tpl->tpl_vars['specialty']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['specialty'] = $__foreach_specialty_4_saved_local_item;
}
if ($__foreach_specialty_4_saved_item) {
$_smarty_tpl->tpl_vars['specialty'] = $__foreach_specialty_4_saved_item;
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
$__foreach_educationForm_5_saved_item = isset($_smarty_tpl->tpl_vars['educationForm']) ? $_smarty_tpl->tpl_vars['educationForm'] : false;
$_smarty_tpl->tpl_vars['educationForm'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['educationForm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['educationForm']->value) {
$_smarty_tpl->tpl_vars['educationForm']->_loop = true;
$__foreach_educationForm_5_saved_local_item = $_smarty_tpl->tpl_vars['educationForm'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['educationForm']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['educationForm']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_5_saved_local_item;
}
if ($__foreach_educationForm_5_saved_item) {
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_5_saved_item;
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
$__foreach_educationCourse_6_saved_item = isset($_smarty_tpl->tpl_vars['educationCourse']) ? $_smarty_tpl->tpl_vars['educationCourse'] : false;
$_smarty_tpl->tpl_vars['educationCourse'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['educationCourse']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['educationCourse']->value) {
$_smarty_tpl->tpl_vars['educationCourse']->_loop = true;
$__foreach_educationCourse_6_saved_local_item = $_smarty_tpl->tpl_vars['educationCourse'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->number();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_6_saved_local_item;
}
if ($__foreach_educationCourse_6_saved_item) {
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_6_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <input type="submit" name="addGroupButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div><?php }
}
