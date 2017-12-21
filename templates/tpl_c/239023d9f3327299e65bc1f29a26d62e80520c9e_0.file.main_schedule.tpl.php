<?php
/* Smarty version 3.1.29, created on 2017-12-21 10:23:44
  from "C:\OpenServer\domains\Newsletter.mgutu\templates\tpl\main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3b618081e0d9_25024448',
  'file_dependency' => 
  array (
    '239023d9f3327299e65bc1f29a26d62e80520c9e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\templates\\tpl\\main_schedule.tpl',
      1 => 1513841007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a3b618081e0d9_25024448 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Основное расписание", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="ui grid">
        <div class="row">
            <div class="sixteen wide column">
                <!-- FIXME: -->
                <a class="ui primary button" style="width: 100%; font-size: 25px;" href="index.php">Назад</a>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <h1 align="center"><?php echo $_smarty_tpl->tpl_vars['institute']->value;?>
</h1>
                <h2 align="center">Группа: <u><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</u></h2>
                <h3 align="center">Форма обучения: <b><?php echo $_smarty_tpl->tpl_vars['education_form']->value;?>
</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <?php
$_from = $_smarty_tpl->tpl_vars['days']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_day_0_saved_item = isset($_smarty_tpl->tpl_vars['day']) ? $_smarty_tpl->tpl_vars['day'] : false;
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$__foreach_day_0_saved_local_item = $_smarty_tpl->tpl_vars['day'];
?>
                    <div class="ui styled accordion">
                        <div class="active title">
                            <?php echo $_smarty_tpl->tpl_vars['day']->value->caption();?>

                        </div>
                        <div class="active content">
                            <table class="ui fixed celled table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th colspan="3">Нечётная</th>
                                        <th colspan="3">Чётная</th>
                                    </tr>
                                    <tr> <!-- FIXME -->
                                        <th>Пара</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                        <th>Преподаватель</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                        <th>Преподаватель</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['pairs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pair_1_saved_item = isset($_smarty_tpl->tpl_vars['pair']) ? $_smarty_tpl->tpl_vars['pair'] : false;
$_smarty_tpl->tpl_vars['pair'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pair']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->_loop = true;
$__foreach_pair_1_saved_local_item = $_smarty_tpl->tpl_vars['pair'];
?>
                                        <tr>
                                            <!-- FIXME: -->
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pair']->value->number();?>
 (<?php echo $_smarty_tpl->tpl_vars['pair']->value->startTime();?>
 - <?php echo $_smarty_tpl->tpl_vars['pair']->value->endTime();?>
)</td>
                                            <?php if ($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1] != NULL) {?>
                                                <?php $_smarty_tpl->tpl_vars['subj_1'] = new Smarty_Variable($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->first_subject()->caption(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'subj_1', 0);?>
                                                <?php $_smarty_tpl->tpl_vars['subj_2'] = new Smarty_Variable($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->second_subject()->caption(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'subj_2', 0);?>
                                                <td><?php echo $_smarty_tpl->tpl_vars['subj_1']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->lectureHall_1();?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->teacher_1();?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['subj_2']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->lectureHall_2();?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->teacher_2();?>
</td>
                                            <?php }?>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_1_saved_local_item;
}
if ($__foreach_pair_1_saved_item) {
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_1_saved_item;
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_0_saved_local_item;
}
if ($__foreach_day_0_saved_item) {
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_0_saved_item;
}
?>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <!-- FIXME: -->
                <a class="ui primary button" style="width: 100%; font-size: 25px;" href="index.php">Назад</a>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">

        $('.ui.accordion').accordion();
    
    <?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
