<?php
/* Smarty version 3.1.29, created on 2017-11-21 18:00:19
  from "C:\OpenServer\domains\Newsletter.mgutu\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a143f83cf0451_93877462',
  'file_dependency' => 
  array (
    '537bcf8cdd6c7528e11f77229cd277f6379b4b7f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\templates\\tpl\\index.tpl',
      1 => 1511276418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a143f83cf0451_93877462 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Главная", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <p id="top"></p>
    <div class="ui internally celled grid">
        <?php if ($_smarty_tpl->tpl_vars['notes']->value != NULL) {?>
            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui three cards">
                            <?php
$_from = $_smarty_tpl->tpl_vars['notes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_note_0_saved_item = isset($_smarty_tpl->tpl_vars['note']) ? $_smarty_tpl->tpl_vars['note'] : false;
$_smarty_tpl->tpl_vars['note'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['note']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
$__foreach_note_0_saved_local_item = $_smarty_tpl->tpl_vars['note'];
?>
                                <a class="blue card">
                                    <div class="content">
                                        <div class="header">
                                            <?php echo $_smarty_tpl->tpl_vars['note']->value->caption();?>

                                        </div>
                                        <div class="meta">
                                            <span class="category"><?php echo $_smarty_tpl->tpl_vars['note']->value->date();?>
</span>
                                        </div>
                                        <div class="description">
                                            <p><?php echo $_smarty_tpl->tpl_vars['note']->value->content();?>
</p>
                                        </div>
                                    </div>
                                </a>
                            <?php
$_smarty_tpl->tpl_vars['note'] = $__foreach_note_0_saved_local_item;
}
if ($__foreach_note_0_saved_item) {
$_smarty_tpl->tpl_vars['note'] = $__foreach_note_0_saved_item;
}
?>
                    </div>
                </div>
            </div>
        <?php }?>
        <div class="row">
            <div class="sixteen wide column" id="notes">
                <table class="ui fixed table" border="1">
                    <thead>
                        <tr id="header">
                            <th>
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                            <td>Аудитория</td>
                                        </tr>
                                        <tr>
                                            <td>Время</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </th>
                            <th>104</th>
                            <th>107</th>
                            <th>109</th>
                            <th>207</th>
                            <th>209</th>
                            <th>201</th>
                            <th>300</th>
                            <th>400</th>
                            <th>401 (мал. акт. зал)</th>
                            <th>405</th>
                            <th>406</th>
                            <th>409</th>
                            <th>Актовый зал</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th colspan="14"><h2 class="date">20.10.2017</h2></th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['schedule']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_1_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$__foreach_data_1_saved_key = isset($_smarty_tpl->tpl_vars['time']) ? $_smarty_tpl->tpl_vars['time'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['time'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['time']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$__foreach_data_1_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</td>
                                <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_2_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_2_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value != '') {?>
                                    <td class="ui orange segment"><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</td>
                                    <?php } else { ?>
                                    <td class="ui segment"><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</td>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_2_saved_local_item;
}
if ($__foreach_entry_2_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_2_saved_item;
}
?>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_1_saved_local_item;
}
if ($__foreach_data_1_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_1_saved_item;
}
if ($__foreach_data_1_saved_key) {
$_smarty_tpl->tpl_vars['time'] = $__foreach_data_1_saved_key;
}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p id="bottom"></p>

    <?php echo '<script'; ?>
 type="text/javascript">
/*
        var scroll_to_down = 90000;
        var scroll_to_top = 2500;
        
        var timeout = setTimeout(function step() {
        
            $("html, body").stop().animate({
                "scrollTop": $("#bottom").offset().top
            }, scroll_to_down).animate({
                "scrollTop": $("#top").offset().top
            }, scroll_to_top);

            setTimeout(step, (scroll_to_down+scroll_to_top));
        }, 1000);

        */
        
    <?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}