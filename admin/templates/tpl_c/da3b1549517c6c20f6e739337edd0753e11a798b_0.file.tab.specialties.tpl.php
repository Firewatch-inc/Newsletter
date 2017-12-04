<?php
/* Smarty version 3.1.29, created on 2017-12-04 14:50:29
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.specialties.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a253685077a95_45032093',
  'file_dependency' => 
  array (
    'da3b1549517c6c20f6e739337edd0753e11a798b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.specialties.tpl',
      1 => 1512388228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a253685077a95_45032093 ($_smarty_tpl) {
?>
<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            <form name="removeSpecialtyForm" method="POST" class="ui form">
                <div class="actions">
                    <input type="submit" name="removeSpecialtyButton" value="Удалить" class="ui red button" style="width: 100%;">  <!-- FIXME -->
                </div>
                <table class="ui table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Название</th>
                        <th>Код</th>
                        <th>Выбрать</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['specialties']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_specialty_0_saved_item = isset($_smarty_tpl->tpl_vars['specialty']) ? $_smarty_tpl->tpl_vars['specialty'] : false;
$_smarty_tpl->tpl_vars['specialty'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['specialty']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['specialty']->value) {
$_smarty_tpl->tpl_vars['specialty']->_loop = true;
$__foreach_specialty_0_saved_local_item = $_smarty_tpl->tpl_vars['specialty'];
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['specialty']->value->caption();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['specialty']->value->code();?>
</td>
                            <td style="text-align: center;"> <!-- FIXME -->
                                <?php if ($_smarty_tpl->tpl_vars['specialty']->value->id() != 1) {?>
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="specialties[]" value="<?php echo $_smarty_tpl->tpl_vars['specialty']->value->id();?>
">
                                        <label for=""></label>
                                    </div>
                                <?php }?>
                            </td>
                        </tr>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                    <?php
$_smarty_tpl->tpl_vars['specialty'] = $__foreach_specialty_0_saved_local_item;
}
if ($__foreach_specialty_0_saved_item) {
$_smarty_tpl->tpl_vars['specialty'] = $__foreach_specialty_0_saved_item;
}
?>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="six wide column">
            <fieldset>
                <legend><b>Добавление специальности</b></legend>
                <form name="addSpecialtyForm" method="POST" class="ui form">
                    <div class="field">
                        <label>Код</label>
                        <input type="text" name="code" required>
                    </div>
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <input type="submit" name="addSpecialtyButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div><?php }
}
