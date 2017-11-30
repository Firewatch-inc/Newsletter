<?php
/* Smarty version 3.1.29, created on 2017-11-30 20:25:22
  from "/var/www/html/templates/tpl/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a203f02ef6211_28870626',
  'file_dependency' => 
  array (
    '77556379f6ddfceaeb79436f56a32c16aac2b79c' => 
    array (
      0 => '/var/www/html/templates/tpl/index.tpl',
      1 => 1512062309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:modals/modal.main_schedule.tpl' => 1,
    'file:modals/modal.change_schedule.tpl' => 1,
    'file:modals/modal.dop_schedule.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a203f02ef6211_28870626 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Главная", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="wrapper" class="ui two column centered grid" style="margin-top: 25%;"> <!-- FIXME: -->
        <div class="four column centered row">
            <div class="column">
                <a class="ui positive button" id="main_schedule_button">Расписание</a>
            </div>
            <div class="column">
                <a class="ui orange button" id="change_schedule_button">Изменения</a>
            </div>
            <div class="column">
                <a class="ui primary button" id="dop_schedule_button">Элективные курсы</a>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/modal.main_schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/modal.change_schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/modal.dop_schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 type="text/javascript">

        $("#main_schedule_button").on("click", function () {
            $("#main_schedule").modal("show");
        });

        $("#change_schedule_button").on("click", function () {
            $("#c_schedule").modal("show");
        });

        $("#dop_schedule_button").on("click", function () {
            $("#dop_schedule").modal("show");
        });
		
    <?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
