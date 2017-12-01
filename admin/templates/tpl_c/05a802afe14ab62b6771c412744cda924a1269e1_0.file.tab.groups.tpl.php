<?php
/* Smarty version 3.1.29, created on 2017-12-01 14:08:41
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.groups.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a2138393f97a7_65247342',
  'file_dependency' => 
  array (
    '05a802afe14ab62b6771c412744cda924a1269e1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.groups.tpl',
      1 => 1512126520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2138393f97a7_65247342 ($_smarty_tpl) {
?>
<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            <?php if ($_smarty_tpl->tpl_vars['courses']->value != NULL) {?>
                <form name="removeCoursesForm" method="POST">
                    <div class="actions">
                        <input type="submit" name="removeCourseButton" value="Удалить" class="ui red button">
                    </div>
                    <table class="ui table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Название курса</th>
                                <th>Адрес</th>
                                <th>Ответственный</th>
                                <th>Выбрать</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['courses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_course_0_saved_item = isset($_smarty_tpl->tpl_vars['course']) ? $_smarty_tpl->tpl_vars['course'] : false;
$_smarty_tpl->tpl_vars['course'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['course']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
$__foreach_course_0_saved_local_item = $_smarty_tpl->tpl_vars['course'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['course']->value->caption();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['course']->value->address();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['course']->value->contactor();?>
</td>
                                    <td>
                                        <div class="ui checkbox">
                                            <input type="checkbox" name="courses[]" value="<?php echo $_smarty_tpl->tpl_vars['course']->value->id();?>
">
                                            <label></label>
                                        </div>
                                    </td>
                                </tr>
                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                            <?php
$_smarty_tpl->tpl_vars['course'] = $__foreach_course_0_saved_local_item;
}
if ($__foreach_course_0_saved_item) {
$_smarty_tpl->tpl_vars['course'] = $__foreach_course_0_saved_item;
}
?>
                        </tbody>
                    </table>
                </form>
            <?php } else { ?>
                <h1 align="center">Курсов нет</h1>
            <?php }?>
        </div>
        <div class="six wide column">
            <fieldset>
                <legend>Добавление группы</legend>
                <form name="addCourseForm" class="ui form" method="POST">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <label>Специализация</label>
                        <section>
                            <?php
$_from = $_smarty_tpl->tpl_vars['specialties']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_specialty_1_saved_item = isset($_smarty_tpl->tpl_vars['specialty']) ? $_smarty_tpl->tpl_vars['specialty'] : false;
$_smarty_tpl->tpl_vars['specialty'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['specialty']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['specialty']->value) {
$_smarty_tpl->tpl_vars['specialty']->_loop = true;
$__foreach_specialty_1_saved_local_item = $_smarty_tpl->tpl_vars['specialty'];
?>

                            <?php
$_smarty_tpl->tpl_vars['specialty'] = $__foreach_specialty_1_saved_local_item;
}
if ($__foreach_specialty_1_saved_item) {
$_smarty_tpl->tpl_vars['specialty'] = $__foreach_specialty_1_saved_item;
}
?>
                        </section>
                    </div>
                    <div class="field">
                        <label>Форма обучения</label>
                        <section>
                            <?php
$_from = $_smarty_tpl->tpl_vars['education_forms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_education_form_2_saved_item = isset($_smarty_tpl->tpl_vars['education_form']) ? $_smarty_tpl->tpl_vars['education_form'] : false;
$_smarty_tpl->tpl_vars['education_form'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['education_form']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['education_form']->value) {
$_smarty_tpl->tpl_vars['education_form']->_loop = true;
$__foreach_education_form_2_saved_local_item = $_smarty_tpl->tpl_vars['education_form'];
?>

                            <?php
$_smarty_tpl->tpl_vars['education_form'] = $__foreach_education_form_2_saved_local_item;
}
if ($__foreach_education_form_2_saved_item) {
$_smarty_tpl->tpl_vars['education_form'] = $__foreach_education_form_2_saved_item;
}
?>
                        </section>
                    </div>
                    <div class="field">
                        <label>Курс</label>
                        
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
