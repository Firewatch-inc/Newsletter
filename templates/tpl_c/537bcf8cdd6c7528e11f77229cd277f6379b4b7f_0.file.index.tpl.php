<?php
/* Smarty version 3.1.29, created on 2017-12-21 09:58:33
  from "C:\OpenServer\domains\Newsletter.mgutu\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3b5b99e814f9_74021611',
  'file_dependency' => 
  array (
    '537bcf8cdd6c7528e11f77229cd277f6379b4b7f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\templates\\tpl\\index.tpl',
      1 => 1513834050,
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
function content_5a3b5b99e814f9_74021611 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\OpenServer\\domains\\Newsletter.mgutu\\engine\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable("Newsletter | Главная", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/begin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="wrapper" class="ui two column centered grid"> <!-- FIXME: -->
        <div class="one column centered row" id="background">
            <div class="column">
                <h1><i class="book icon"></i>Система Электронного Расписания</h1>
            </div>
        </div>
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
        <div class="row">
            <div class="ui vertical footer segment">
                <div class="ui center aligned container">
                    <div class="ui horizontal inverted small divided link list">
                        <a class="item" href="#" style="font-size: 32px; color: black;">Сегодня <?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
</a>
                    </div>
                </div>
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

        function getGroups(institute, education_course, education_form) {
            $.ajax({
                url: "admin/php/get_groups.php",
                type: "POST",
                data: { institute: institute, education_course: education_course, education_form: education_form },
                success: function(replay) {
                    if (replay !== "") {
                        $("[name='group']").html("");
                        $("[name='group']").html(replay);
                    } else {
                        $("[name='group']").html("");
                    }
                },
                error: function (replay) {
                    console.log(replay);
                }
            });
        }

        $(document).ready(function() {
            $("[name='institute']").val(localStorage.getItem("current_institute"));
            $("[name='education_course']").val(localStorage.getItem("current_education_course"));
            $("[name='education_form']").val(localStorage.getItem("current_education_form"));
            getGroups(
                localStorage.getItem("current_institute"),
                localStorage.getItem("current_education_course"),
                localStorage.getItem("current_education_form")
            );
        });

        $("[name='institute'], [name='education_course'], [name='education_form']").on("change", function() {
            getGroups($("[name='institute']").val(), $("[name='education_course']").val(), $("[name='education_form']").val());

            localStorage.setItem("current_institute", $("[name='institute']").val());
            localStorage.setItem("current_education_course", $("[name='education_course']").val());
            localStorage.setItem("current_education_form", $("[name='education_form']").val());
        });
        
        
        var updateInterval = 900000;
        setTimeout(function update() {
            document.location.href = "index.php";
            setTimeout(update, updateInterval);
        }, updateInterval);
        
		
    <?php echo '</script'; ?>
>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:html/end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
