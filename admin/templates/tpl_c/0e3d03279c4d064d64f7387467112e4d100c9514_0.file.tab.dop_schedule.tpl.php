<?php
/* Smarty version 3.1.29, created on 2017-11-30 16:12:09
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.dop_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a2003a90776f6_29168573',
  'file_dependency' => 
  array (
    '0e3d03279c4d064d64f7387467112e4d100c9514' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.dop_schedule.tpl',
      1 => 1512047528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2003a90776f6_29168573 ($_smarty_tpl) {
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
                <legend>Добавление курса</legend>
                <form name="addCourseForm" class="ui form" method="POST">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <label>Ответственный</label>
                        <input type="text" name="contactor" required>
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
