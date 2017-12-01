<?php
/* Smarty version 3.1.29, created on 2017-12-01 19:08:40
  from "C:\OpenServer\domains\Newsletter.mgutu\templates\tpl\main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a217e88746912_61973659',
  'file_dependency' => 
  array (
    '239023d9f3327299e65bc1f29a26d62e80520c9e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\templates\\tpl\\main_schedule.tpl',
      1 => 1512143454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a217e88746912_61973659 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Основное расписание", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="ui grid">
            <div class="row">
                <div class="sixteen wide column">
                    <a class="ui primary button" href="index.php">Назад</a>
                </div>
            </div>
        <div class="row">
            <div class="sixteen wide column">
                <h1 align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value['institute'];?>
. Группа <?php echo $_smarty_tpl->tpl_vars['data']->value['group'];?>
. Форма обучения: <?php echo $_smarty_tpl->tpl_vars['data']->value['education_form'];?>
</h1>
            </div>
        </div>
        <div class="row" style="padding: 15px;">
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
                            <table class="ui fixed table">
                                <thead>
                                    <tr>
                                        <th>Пара</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <table width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Чётная</th>
                                                        <th>Нечётная</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </th>
                                        <th></th>
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
                                            <td><?php echo $_smarty_tpl->tpl_vars['pair']->value->number();?>
 (<?php echo $_smarty_tpl->tpl_vars['pair']->value->startTime();?>
 - <?php echo $_smarty_tpl->tpl_vars['pair']->value->endTime();?>
)</td>
                                            <td>
                                                <table width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Предмет 1
                                                            </td>
                                                            <td>
                                                                Предмет 2
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td>

                                            </td>
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
                    <br>
                <?php
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_0_saved_local_item;
}
if ($__foreach_day_0_saved_item) {
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_0_saved_item;
}
?>
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
