<?php
/* Smarty version 3.1.29, created on 2017-12-19 11:44:45
  from "C:\OpenServer\domains\Newsletter.mgutu\admin\templates\tpl\tabs\tab.main_schedule.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a38d17d5a9814_25296169',
  'file_dependency' => 
  array (
    'b7ca3e1d7d983b95da762128261231320d19fdf7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Newsletter.mgutu\\admin\\templates\\tpl\\tabs\\tab.main_schedule.tpl',
      1 => 1513673083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38d17d5a9814_25296169 ($_smarty_tpl) {
?>
<form name="saveMainScheduleForm" method="POST" class="ui form">
    <datalist id="subjects"></datalist>
    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <div class="four fields">
                    <div class="field">
                        <label>Институт</label>
                        <select name="institute">
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
                                <option value="<?php echo $_smarty_tpl->tpl_vars['institute']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['institute']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_0_saved_local_item;
}
if ($__foreach_institute_0_saved_item) {
$_smarty_tpl->tpl_vars['institute'] = $__foreach_institute_0_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Учебный курс</label>
                        <select name="education_course">
                            <?php
$_from = $_smarty_tpl->tpl_vars['educationCourses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_educationCourse_1_saved_item = isset($_smarty_tpl->tpl_vars['educationCourse']) ? $_smarty_tpl->tpl_vars['educationCourse'] : false;
$_smarty_tpl->tpl_vars['educationCourse'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['educationCourse']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['educationCourse']->value) {
$_smarty_tpl->tpl_vars['educationCourse']->_loop = true;
$__foreach_educationCourse_1_saved_local_item = $_smarty_tpl->tpl_vars['educationCourse'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['educationCourse']->value->number();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_1_saved_local_item;
}
if ($__foreach_educationCourse_1_saved_item) {
$_smarty_tpl->tpl_vars['educationCourse'] = $__foreach_educationCourse_1_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Форма обучения</label>
                        <select name="education_form">
                            <?php
$_from = $_smarty_tpl->tpl_vars['educationForms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_educationForm_2_saved_item = isset($_smarty_tpl->tpl_vars['educationForm']) ? $_smarty_tpl->tpl_vars['educationForm'] : false;
$_smarty_tpl->tpl_vars['educationForm'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['educationForm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['educationForm']->value) {
$_smarty_tpl->tpl_vars['educationForm']->_loop = true;
$__foreach_educationForm_2_saved_local_item = $_smarty_tpl->tpl_vars['educationForm'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['educationForm']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['educationForm']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_2_saved_local_item;
}
if ($__foreach_educationForm_2_saved_item) {
$_smarty_tpl->tpl_vars['educationForm'] = $__foreach_educationForm_2_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Группа</label>
                        <select name="group"></select>
                        <input type="hidden" name="group_caption" value="">
                    </div>
                </div>
                <div class="four fields">
                    <div class="field">
                        <label>День недели</label>
                        <select name="day">
                            <?php
$_from = $_smarty_tpl->tpl_vars['days']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_day_3_saved_item = isset($_smarty_tpl->tpl_vars['day']) ? $_smarty_tpl->tpl_vars['day'] : false;
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$__foreach_day_3_saved_local_item = $_smarty_tpl->tpl_vars['day'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['day']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_3_saved_local_item;
}
if ($__foreach_day_3_saved_item) {
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_3_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Пара</label>
                        <select name="pair">
                            <?php
$_from = $_smarty_tpl->tpl_vars['pairs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pair_4_saved_item = isset($_smarty_tpl->tpl_vars['pair']) ? $_smarty_tpl->tpl_vars['pair'] : false;
$_smarty_tpl->tpl_vars['pair'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pair']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->_loop = true;
$__foreach_pair_4_saved_local_item = $_smarty_tpl->tpl_vars['pair'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pair']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['pair']->value->number();?>
 (<?php echo $_smarty_tpl->tpl_vars['pair']->value->startTime();?>
 - <?php echo $_smarty_tpl->tpl_vars['pair']->value->endTime();?>
)</option>
                            <?php
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_4_saved_local_item;
}
if ($__foreach_pair_4_saved_item) {
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_4_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Пара (нечётная неделя)</label>
                        <select name="subject_1">
                            <?php
$_from = $_smarty_tpl->tpl_vars['subjects']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_subject_5_saved_item = isset($_smarty_tpl->tpl_vars['subject']) ? $_smarty_tpl->tpl_vars['subject'] : false;
$_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['subject']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->_loop = true;
$__foreach_subject_5_saved_local_item = $_smarty_tpl->tpl_vars['subject'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['subject']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['subject'] = $__foreach_subject_5_saved_local_item;
}
if ($__foreach_subject_5_saved_item) {
$_smarty_tpl->tpl_vars['subject'] = $__foreach_subject_5_saved_item;
}
?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Пара (чётная неделя)</label>
                        <select name="subject_2">
                            <?php
$_from = $_smarty_tpl->tpl_vars['subjects']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_subject_6_saved_item = isset($_smarty_tpl->tpl_vars['subject']) ? $_smarty_tpl->tpl_vars['subject'] : false;
$_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['subject']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->_loop = true;
$__foreach_subject_6_saved_local_item = $_smarty_tpl->tpl_vars['subject'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['subject']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value->caption();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['subject'] = $__foreach_subject_6_saved_local_item;
}
if ($__foreach_subject_6_saved_item) {
$_smarty_tpl->tpl_vars['subject'] = $__foreach_subject_6_saved_item;
}
?>
                        </select>
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Аудитория (Нечётная)</label>
                        <input type="text" name="lecture_hall_1">
                    </div>
                    <div class="field">
                        <label>Аудитория (Чётная)</label>
                        <input type="text" name="lecture_hall_2">
                    </div>
                    <div class="field">
                        <label>Преподаватель</label>
                        <input type="text" name="teacher">
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <input type="submit" name="selectGroupScheduleButton" value="Просмотреть расписание группы" class="ui positive button" style="width: 100%;">
                    </div>
                    <div class="field">
                        <input type="submit" name="saveGroupScheduleButton" value="Сохранить" class="ui primary button" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <?php
$_from = $_smarty_tpl->tpl_vars['days']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_day_7_saved_item = isset($_smarty_tpl->tpl_vars['day']) ? $_smarty_tpl->tpl_vars['day'] : false;
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$__foreach_day_7_saved_local_item = $_smarty_tpl->tpl_vars['day'];
?>
                    <div class="ui styled accordion">
                        <div class="active title">
                            <?php echo $_smarty_tpl->tpl_vars['day']->value->caption();?>

                        </div>
                        <div class="active content">
                            <table class="ui fixed celled table">
                                <thead>
                                    <tr> <!-- FIXME -->
                                        <th>Пара</th>
                                        <th>
                                            <table class="ui celled table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">Нечётная</th>
                                                        <th colspan="2">Чётная</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="text-align: center;">
                                                        <td>Пара</td>
                                                        <td>Аудитория</td>
                                                        <td>Пара</td>
                                                        <td>Аудитория</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </th>
                                        <th>Преподаватель</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <col width="10%">
                                    <col width="80%">
                                    <col width="10%">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['pairs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pair_8_saved_item = isset($_smarty_tpl->tpl_vars['pair']) ? $_smarty_tpl->tpl_vars['pair'] : false;
$_smarty_tpl->tpl_vars['pair'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pair']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->_loop = true;
$__foreach_pair_8_saved_local_item = $_smarty_tpl->tpl_vars['pair'];
?>
                                        <tr>
                                            <!-- FIXME: -->
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pair']->value->number();?>
 (<?php echo $_smarty_tpl->tpl_vars['pair']->value->startTime();?>
 - <?php echo $_smarty_tpl->tpl_vars['pair']->value->endTime();?>
)</td>
                                            <td class="ui form">
                                                <?php if ($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1] != NULL) {?>
                                                    <?php $_smarty_tpl->tpl_vars['subj_1'] = new Smarty_Variable($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->first_subject()->caption(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'subj_1', 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['subj_2'] = new Smarty_Variable($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->second_subject()->caption(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'subj_2', 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['subj_1']->value === $_smarty_tpl->tpl_vars['subj_2']->value) {?>
                                                        <div class="four fields">
                                                            <div class="field">
                                                                <?php echo $_smarty_tpl->tpl_vars['subj_1']->value;?>

                                                            </div>
                                                            <div class="field"  style="text-align: center;">
                                                                <?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->lectureHall_1();?>

                                                            </div>
                                                            <div class="field">
                                                                <?php echo $_smarty_tpl->tpl_vars['subj_2']->value;?>

                                                            </div>
                                                            <div class="field"  style="text-align: center;">
                                                                <?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->lectureHall_2();?>

                                                            </div>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="four fields">
                                                            <div class="field">
                                                                <?php echo $_smarty_tpl->tpl_vars['subj_1']->value;?>

                                                            </div>
                                                            <div class="field"  style="text-align: center;">
                                                                <?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->lectureHall_1();?>

                                                            </div>
                                                            <div class="field">
                                                                <?php echo $_smarty_tpl->tpl_vars['subj_2']->value;?>

                                                            </div>
                                                            <div class="field"  style="text-align: center;">
                                                                <?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->lectureHall_2();?>

                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                <?php }?>
                                            </td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1] != NULL) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['main_schedule']->value[$_smarty_tpl->tpl_vars['day']->value->id()][$_smarty_tpl->tpl_vars['pair']->value->number()-1]->teacher();?>

                                                <?php }?>
                                            </td>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_8_saved_local_item;
}
if ($__foreach_pair_8_saved_item) {
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_8_saved_item;
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_7_saved_local_item;
}
if ($__foreach_day_7_saved_item) {
$_smarty_tpl->tpl_vars['day'] = $__foreach_day_7_saved_item;
}
?>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">

        function getGroups(institute, education_course, education_form)
        {
            $.ajax({
                url: "php/get_groups.php",
                type: "POST",
                data: { institute: institute, education_course: education_course, education_form: education_form },
                success: function(replay) {
                    if (replay !== "") {
                        $("[name='group']").html("");
                        $("[name='group']").html(replay);
                        $("[name='group']").val(localStorage.getItem("current_group"));
                    } else {
                        $("[name='group']").html("");
                    }
                },
                error: function (replay) {
                    console.log(replay);
                }
            });
        }


        $(document).ready(function(){
            getGroups(
                localStorage.getItem("current_institute"),
                localStorage.getItem("current_education_course"),
                localStorage.getItem("current_education_form")
            );
            $("[name='institute']").val(localStorage.getItem("current_institute"));
            $("[name='education_course']").val(localStorage.getItem("current_education_course"));
            $("[name='education_form']").val(localStorage.getItem("current_education_form"));
        });

        $("[name='institute'], [name='education_course'], [name='education_form']").on("change", function() {
            getGroups($("[name='institute']").val(), $("[name='education_course']").val(), $("[name='education_form']").val());
            localStorage.setItem("current_institute", $("[name='institute']").val());
            localStorage.setItem("current_education_course", $("[name='education_course']").val());
            localStorage.setItem("current_education_form", $("[name='education_form']").val());
        });

        $("[name='group']").on('change', function(){
            localStorage.setItem("current_group", $("[name='group']").val());
        });
        /*
                $("[name='subject_1'], [name='subject_2']").on("change", function () {
                    alert("change");
                   let subject = $(this).val();

                   if (subject !== "") {
                       $.ajax({
                           url: "php/get_subjects.php",
                           type: "POST",
                           data: "subject=" + subject,
                           success: function (replay) {
                               $("#subjects").html("");
                               $("#subjects").html(replay);
                           },
                           error: function (replay) {

                           }
                       });
                   }


                });*/

    <?php echo '</script'; ?>
>

</form><?php }
}
