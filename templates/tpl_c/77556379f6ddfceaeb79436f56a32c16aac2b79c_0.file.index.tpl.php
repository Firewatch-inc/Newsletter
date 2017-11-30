<?php
/* Smarty version 3.1.29, created on 2017-11-29 15:36:25
  from "/var/www/html/templates/tpl/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1ea9c9d83937_50780641',
  'file_dependency' => 
  array (
    '77556379f6ddfceaeb79436f56a32c16aac2b79c' => 
    array (
      0 => '/var/www/html/templates/tpl/index.tpl',
      1 => 1511958985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/begin.tpl' => 1,
    'file:modals/modal.pair.tpl' => 1,
    'file:modals/modal.change_schedule.tpl' => 1,
    'file:modals/modal.add_schedule.tpl' => 1,
    'file:html/end.tpl' => 1,
  ),
),false)) {
function content_5a1ea9c9d83937_50780641 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Главная", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="ui two column centered grid">
        <div class="four column centered row">
          <div class="column">
            <a class="ui positive button" id="main_schedule">Расписание</a>
          </div>
          <div class="column">
            <a class="ui orange button" id="change_schedule">Изменения</a>
          </div>
          <div class="column">
            <a class="ui primary button" id="dop_schedule">Элективные курсы</a>
          </div>
        </div>
      </div>

    <p id="bottom"></p>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/modal.pair.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/modal.change_schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/modal.add_schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <input type="hidden" id="updateInterval" value="<?php echo $_smarty_tpl->tpl_vars['updateInterval']->value;?>
">
    <?php echo '<script'; ?>
 type="text/javascript">

        $("#main_schedule").on("click", function () {
            $("#schedule").modal("show");
        });

        $("#change_schedule").on("click", function () {
            $("#c_schedule").modal("show");
        });

        $("#dop_schedule").on("click", function () {
            $("#add_schedule").modal("show");
        });


        let updateInterval = document.getElementById("updateInterval").value;
        
        if (updateInterval > 0) {
            setTimeout(function reload() {
                location.reload();
                setTimeout(reload, updateInterval);
            }, updateInterval);
        }

        var scroll_to_down = 90000;
        var scroll_to_top = 2500;
        /*
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