<?php
/* Smarty version 3.1.29, created on 2017-12-07 18:36:23
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.institutes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a295ff70eb1a7_95609546',
  'file_dependency' => 
  array (
    '41d0f49d234e94488800fd8dc251016d583165e3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.institutes.tpl',
      1 => 1512660982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a295ff70eb1a7_95609546 ($_smarty_tpl) {
?>
<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            <form name="removeInstituteForm" method="POST" class="ui form">
                <div class="actions">
                    <input type="submit" name="removeInstituteButton" value="Удалить" class="ui red button" style="width: 100%;">  <!-- FIXME -->
                </div>
                <table class="ui table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Сокращение</th>
                            <th>Адрес</th>
                            <th>Выбрать</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
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
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['institute']->value->caption();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['institute']->value->shortCaption();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['institute']->value->address();?>
</td>
                                <td style="text-align: center;"> <!-- FIXME -->
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="institutes[]" value="<?php echo $_smarty_tpl->tpl_vars['institute']->value->id();?>
">
                                        <label for=""></label>
                                    </div>
                                </td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                        <?php
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_0_saved_local_item;
}
if ($__foreach_institute_0_saved_item) {
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_0_saved_item;
}
?>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="six wide column">
            <fieldset>
                <legend><b>Добавление специальности</b></legend>
                <form name="addInstituteForm" method="POST" class="ui form">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="code" required>
                    </div>
                    <div class="field">
                        <label>Сокращение</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <label>Адрес</label>
                        <input type="text" name="shortCaption" required>
                    </div>
                    <div class="field">
                        <input type="submit" name="addInstituteButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div><?php }
}
