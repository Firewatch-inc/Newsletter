<?php
/* Smarty version 3.1.29, created on 2017-12-02 11:05:25
  from "E:\OpenServer\domains\Newsletter.mgutm\admin\templates\tpl\tabs\tab.settings.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a225ec5136b46_91990149',
  'file_dependency' => 
  array (
    '0b1e69326af690ecca3a09a7eade15a209b82685' => 
    array (
      0 => 'E:\\OpenServer\\domains\\Newsletter.mgutm\\admin\\templates\\tpl\\tabs\\tab.settings.tpl',
      1 => 1512153311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a225ec5136b46_91990149 ($_smarty_tpl) {
?>
<form name="saveSettings" method="POST" class="ui form">
    <div class="two fields">
        <div class="field">
            <div class="two fields">
                <div class="field">
                    <select name="updateInterval">
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['update_interval'] == 0) {?>
                            <option value="0">Не обновлять</option>
                            <option value="5">5 минут</option>
                            <option value="15">15 минут</option>
                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['update_interval'] == 5) {?>
                            <option value="5">5 минут</option>
                            <option value="0">Не обновлять</option>
                            <option value="15">15 минут</option>
                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['update_interval'] == 15) {?>
                        <option value="15">15 минут</option>
                            <option value="5">5 минут</option>
                            <option value="0">Не обновлять</option>
                        <?php }?>
                    </select>
                </div>
                <div class="field">
                    <input type="submit" name="setUpdateIntervalButton" value="Задать интервал обновления" class="ui button">
                </div>
            </div>
        </div>
    </div>
</form><?php }
}
