<?php
/* Smarty version 3.1.29, created on 2017-12-04 15:56:39
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.settings.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a254607ce2ae2_59134104',
  'file_dependency' => 
  array (
    'defad8303497de4228fe81c09a41c483f268b078' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.settings.tpl',
      1 => 1512392199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a254607ce2ae2_59134104 ($_smarty_tpl) {
?>
<div class="ui stackable grid">
    <div class="row">
        <div class="sixteen wide column">
            <div class="ui statistics">
                <div class="statistic">
                    <div class="value">
                        <?php echo count($_smarty_tpl->tpl_vars['institutes']->value);?>

                    </div>
                    <div class="label">
                        Институтов
                    </div>
                </div>
                <div class="statistic">
                    <div class="value">
                        <?php echo $_smarty_tpl->tpl_vars['count_groups']->value;?>

                    </div>
                    <div class="label">
                        Групп
                    </div>
                </div>
                <div class="statistic">
                    <div class="value">
                        <?php echo count($_smarty_tpl->tpl_vars['specialties']->value);?>

                    </div>
                    <div class="label">
                        Специальностей
                    </div>
                </div>
                <div class="statistic">
                    <div class="value">
                        0
                    </div>
                    <div class="label">
                        Изменений в расписании
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="eight wide column">
            <fieldset>
                <legend><b>Дни недели</b></legend>
                <table class="ui table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Скоращённое обозначение</th>
                        <th>Полное обозначение</th>
                    </tr>
                    </thead>
                    <tbody>
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
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['day']->value->number();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['day']->value->shortCaption();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['day']->value->caption();?>
</td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_0_saved_local_item;
}
if ($__foreach_day_0_saved_item) {
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_0_saved_item;
}
?>
                    </tbody>
                </table>
            </fieldset>
        </div>
        <div class="eight wide column">
                    <fieldset>
                        <legend><b>Пары</b></legend>
                        <table class="ui table">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Время</th>
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
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['pair']->value->startTime();?>
 - <?php echo $_smarty_tpl->tpl_vars['pair']->value->endTime();?>
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
                    </fieldset>
        </div>
    </div>
</div><?php }
}
