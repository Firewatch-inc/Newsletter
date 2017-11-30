<?php
/* Smarty version 3.1.29, created on 2017-11-30 15:40:43
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.settings.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1ffc4b3c2290_58796593',
  'file_dependency' => 
  array (
    'defad8303497de4228fe81c09a41c483f268b078' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.settings.tpl',
      1 => 1512045642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1ffc4b3c2290_58796593 ($_smarty_tpl) {
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
