<?php
/* Smarty version 3.1.29, created on 2017-12-01 12:53:07
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a21268374f179_25053881',
  'file_dependency' => 
  array (
    'b7ca3e1d7d983b95da762128261231320d19fdf7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.main_schedule.tpl',
      1 => 1512121986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a21268374f179_25053881 ($_smarty_tpl) {
?>
<form name="saveMainScheduleForm" method="POST" class="ui form">
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
                        <label>Учебный курс</label>
                        <select>
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
                        <select>
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Понедельник
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
                                <tr>
                                    <td>ПН</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ВТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СР</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ЧТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ПТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СБ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Вторник
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
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Среда
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
                                <tr>
                                    <td>ПН</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ВТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СР</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ЧТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ПТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СБ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Четверг
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
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Пятница
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
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Суббота
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
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form><?php }
}
