<?php
/* Smarty version 3.1.29, created on 2017-12-01 10:31:05
  from "C:\OpenServer\domains\Newsletter.mgutu\templates\tpl\modals\modal.dop_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a210539713ab2_99394829',
  'file_dependency' => 
  array (
    'bcd53614ec95457a55033e12f593b72fd62a251f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\templates\\tpl\\modals\\modal.dop_schedule.tpl',
      1 => 1512113460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a210539713ab2_99394829 ($_smarty_tpl) {
?>
<div class="ui modal" id="dop_schedule">
    <div class="header">
        Расписание элективных курсов
    </div>
    <div class="content">
        <?php if ($_smarty_tpl->tpl_vars['courses']->value != NULL) {?>
            <table class="ui striped table">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Курс</th>
                        <th>ПН</th>
                        <th>ВТ</th>
                        <th>СР</th>
                        <th>ЧТ</th>
                        <th>ПТ</th>
                        <th>СБ</th>
                        <th>ВС</th>
                        <th>Адрес</th>
                        <th>Ответственный</th>
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
                            <td>
                                <div class="ui ribbon label"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['course']->value->course()->caption();?>

                            </td>
                            <?php
$_from = $_smarty_tpl->tpl_vars['course']->value->days();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_day_1_saved_item = isset($_smarty_tpl->tpl_vars['day']) ? $_smarty_tpl->tpl_vars['day'] : false;
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$__foreach_day_1_saved_local_item = $_smarty_tpl->tpl_vars['day'];
?>
                                <td><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</td>
                            <?php
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_1_saved_local_item;
}
if ($__foreach_day_1_saved_item) {
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_1_saved_item;
}
?>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['course']->value->course()->address();?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['course']->value->course()->contactor();?>

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
        <?php } else { ?>
            <h3 align="center">Расписание курсов временно недоступно</h3>
        <?php }?>
    </div>
</div><?php }
}
