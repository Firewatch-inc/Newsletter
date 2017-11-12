<?php
/* Smarty version 3.1.29, created on 2017-11-12 22:56:50
  from "C:\OpenServer\domains\Newsletter\src\templates\tpl\one_news.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a08a782824111_37008925',
  'file_dependency' => 
  array (
    '351d30cc6b0ce68133339f57071b4e49999f8b66' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter\\src\\templates\\tpl\\one_news.tpl',
      1 => 1510516544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a08a782824111_37008925 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\OpenServer\\domains\\Newsletter\\src\\engine\\smarty\\plugins\\modifier.date_format.php';
?>
<div class="ui piled segment news">
    <h4 class="ui header"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one_news']->value->date(),"%d.%m.%Y");?>

    |
    <?php echo $_smarty_tpl->tpl_vars['one_news']->value->caption();?>

    </h4>
    <p>                                
        <?php echo $_smarty_tpl->tpl_vars['one_news']->value->content();?>

    </p>
    <hr>
    <i><?php echo $_smarty_tpl->tpl_vars['one_news']->value->author();?>
</i>
</div><?php }
}
