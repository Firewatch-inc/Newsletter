<?php
/* Smarty version 3.1.29, created on 2017-12-05 10:31:44
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.dop_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a264b6024b1d3_74354799',
  'file_dependency' => 
  array (
    '0e3d03279c4d064d64f7387467112e4d100c9514' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.dop_schedule.tpl',
      1 => 1512459102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a264b6024b1d3_74354799 ($_smarty_tpl) {
?>
<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            <?php if ($_smarty_tpl->tpl_vars['courses']->value != NULL) {?>
                <form name="removeCoursesForm" method="POST">
                    <div class="actions">
                        <input type="submit" name="removeCourseButton" value="Удалить" class="ui red button" style="width: 100%;">
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
                                    <td style="text-align: center;"> <!-- FIXME: -->
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
                        <label>Адрес</label>
                        <input type="text" name="address" required>
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
    <div class="row">
        <div class="sixteen wide column">
            <form name="saveCoursesScheduleForm" method="POST" class="ui form">
                <div class="field">
                    <?php if ($_smarty_tpl->tpl_vars['courses_schedule']->value != NULL) {?>
                        <table class="ui celled table">
                            <thead>
                                <tr>
                                    <th>Курс</th>
                                    <th>ПН</th>
                                    <th>ВТ</th>
                                    <th>СР</th>
                                    <th>ЧТ</th>
                                    <th>ПТ</th>
                                    <th>СБ</th>
                                    <th>ВС</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['courses_schedule']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_course_1_saved_item = isset($_smarty_tpl->tpl_vars['course']) ? $_smarty_tpl->tpl_vars['course'] : false;
$_smarty_tpl->tpl_vars['course'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['course']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
$__foreach_course_1_saved_local_item = $_smarty_tpl->tpl_vars['course'];
?>
                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['course']->value->course()->caption();?>

                                        </td>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['course']->value->days();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_day_2_saved_item = isset($_smarty_tpl->tpl_vars['day']) ? $_smarty_tpl->tpl_vars['day'] : false;
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$__foreach_day_2_saved_local_item = $_smarty_tpl->tpl_vars['day'];
?>
                                            <td>
                                                <?php $_smarty_tpl->tpl_vars['time'] = new Smarty_Variable(explode("-",$_smarty_tpl->tpl_vars['day']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'time', 0);?>
                                                <div class="two fields">
                                                    <div class="field">            
                                                        <input type="text" name="start_time_row_<?php echo $_smarty_tpl->tpl_vars['course']->value->course()->id();?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['time']->value[0];?>
">
                                                    </div>
                                                    <div class="field">
                                                        <input type="text" name="end_time_row_<?php echo $_smarty_tpl->tpl_vars['course']->value->course()->id();?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['time']->value[1];?>
">
                                                    </div>
                                                </div>
                                            </td>
                                        <?php
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_2_saved_local_item;
}
if ($__foreach_day_2_saved_item) {
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_2_saved_item;
}
?>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['course'] = $__foreach_course_1_saved_local_item;
}
if ($__foreach_course_1_saved_item) {
$_smarty_tpl->tpl_vars['course'] = $__foreach_course_1_saved_item;
}
?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <h3 align="center">Расписание курсов временно недоступно</h3>
                    <?php }?>
                </div>
                <div class="field">
                    <input type="submit" name="saveCoursesScheduleButton" value="Сохранить" class="ui primary button">
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
