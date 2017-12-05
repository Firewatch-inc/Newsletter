<?php
/* Smarty version 3.1.29, created on 2017-12-05 16:47:50
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.subjects.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a26a3865edb85_06714264',
  'file_dependency' => 
  array (
    '7f721f0ad876d205f8488d8b5bb771f4166abb64' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.subjects.tpl',
      1 => 1512481669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a26a3865edb85_06714264 ($_smarty_tpl) {
?>
<div class="ui internally stackable grid">
    <div class="row">
        <div class="ten wide column">
            <form name="removeSubjectsForm" method="POST" class="ui form">
                <div class="actinos">
                    <div class="ui borderless menu">
                        
                        
                        <a class="item">
                            <i class="search icon"></i>
                            <input type="text" name="search_subjects" placeholder="Поиск">
                        </a>
                        <div class="right menu">
                            <a class="item"><input type="button" name="showSubjects" value="Показать" class="ui positive button"></a>
                            <a class="item"><input type="submit" name="removeSubjectsButton" value="Удалить" class="ui red button"></a>
                        </div>
                    </div>
                </div>
                <table class="ui table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Выбрать</th>
                        </tr>
                    </thead>
                    <tbody id="subjects_table_body">

                    </tbody>
                </table>
            </form>
        </div>
        <div class="six wide column">
            <fieldset>
                <legend><b>Добавление предмента</b></legend>
                <form name="addSubjectForm" method="POST" class="ui form">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption">
                    </div>
                    <div class="field">
                        <input type="submit" name="addSubjectButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">

    /*
    $("[name='showSubjects']").on("click", function(){
        let start = $("[name='s_limit']").val();
        let end = $("[name='e_limit']").val();

        if (start < end) {
            $.ajax({
                url: "php/get_limit_subjects.php",
                type: "POST",
                data: { interval: { start: start, end: end} },
                success: function (replay) {
                    $("#subjects_table_body").html("");
                    $("#subjects_table_body").html(replay);
                },
                error: function (replay) {
                    
                }
            });
        }

    });
    */

    $("[name='search_subjects']").on('keyup', function () {
        let subject = $(this).val();

        if (subject !== "") {
            $.ajax({
                url: "php/get_limit_subjects.php",
                type: "POST",
                data: { subject: subject },
                success: function (replay) {
                    $("#subjects_table_body").html("");
                    $("#subjects_table_body").html(replay);
                },
                error: function (replay) {

                }
            });
        }

    });

<?php echo '</script'; ?>
><?php }
}
