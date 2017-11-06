<?php
/* Smarty version 3.1.29, created on 2017-11-06 19:10:16
  from "E:\OpenServer\domains\Newsletter.mgutm\src\templates\tpl\one_news.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a008968b20bf1_75584600',
  'file_dependency' => 
  array (
    '5500d4d0da0552272176a9080994e82ffb828272' => 
    array (
      0 => 'E:\\OpenServer\\domains\\Newsletter.mgutm\\src\\templates\\tpl\\one_news.tpl',
      1 => 1509984616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a008968b20bf1_75584600 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\OpenServer\\domains\\Newsletter.mgutm\\src\\engine\\smarty\\plugins\\modifier.date_format.php';
?>
<div class="ui piled segment news">
    <h4 class="ui header"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%d.%m.%Y");?>
 | <?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
</h4>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
    
</div><?php }
}
