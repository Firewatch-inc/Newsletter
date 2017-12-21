<form name="saveMainScheduleForm" method="POST" class="ui form">
    <datalist id="subjects"></datalist>
    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <div class="four fields">
                    <div class="field">
                        <label>Институт</label>
                        <select name="institute">
                            {foreach $institutes as $institute}
                                <option value="{$institute->id()}">{$institute->caption()}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <label>Учебный курс</label>
                        <select name="education_course">
                            {foreach $educationCourses as $educationCourse}
                                <option value="{$educationCourse->id()}">{$educationCourse->number()}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <label>Форма обучения</label>
                        <select name="education_form">
                            {foreach $educationForms as $educationForm}
                                <option value="{$educationForm->id()}">{$educationForm->caption()}</option>
                            {/foreach}
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
                            {foreach $days as $day}
                                <option value="{$day->id()}">{$day->caption()}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <label>Пара</label>
                        <select name="pair">
                            {foreach $pairs as $pair}
                                <option value="{$pair->id()}">{$pair->number()} ({$pair->startTime()} - {$pair->endTime()})</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <label>Предмет (нечётная неделя)</label>
                        <select name="subject_1">
                            {foreach $subjects as $subject}
                                <option value="{$subject->id()}">{$subject->caption()}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <label>Предмет (чётная неделя)</label>
                        <select name="subject_2">
                            {foreach $subjects as $subject}
                                <option value="{$subject->id()}">{$subject->caption()}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="four fields">
                    <div class="field">
                        <label>Аудитория (Нечётная)</label>
                        <input type="text" name="lecture_hall_1">
                    </div>
                    <div class="field">
                        <label>Аудитория (Чётная)</label>
                        <input type="text" name="lecture_hall_2">
                    </div>
                    <div class="field">
                        <label>Преподаватель (Нечётная)</label>
                        <input type="text" name="teacher_1">
                    </div>
                    <div class="field">
                        <label>Преподаватель (Чётная)</label>
                        <input type="text" name="teacher_2">
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
                {foreach $days as $day}
                    <div class="ui styled accordion">
                        <div class="active title">
                            {$day->caption()}
                        </div>
                        <div class="active content">
                            <table class="ui fixed celled table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th colspan="3">Нечётная</th>
                                        <th colspan="3">Чётная</th>
                                    </tr>
                                    <tr> <!-- FIXME -->
                                        <th>Пара</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                        <th>Преподаватель</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                        <th>Преподаватель</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $pairs as $pair}
                                        <tr>
                                            <!-- FIXME: -->
                                            <td style="text-align: center;">{$pair->number()} ({$pair->startTime()} - {$pair->endTime()})</td>
                                            {if $main_schedule[$day->id()][$pair->number()-1] != NULL}
                                                {$subj_1 = $main_schedule[$day->id()][$pair->number()-1]->first_subject()->caption()}
                                                {$subj_2 = $main_schedule[$day->id()][$pair->number()-1]->second_subject()->caption()}
                                                <td>{$subj_1}</td>
                                                <td>{$main_schedule[$day->id()][$pair->number()-1]->lectureHall_1()}</td>
                                                <td>{$main_schedule[$day->id()][$pair->number()-1]->teacher_1()}</td>
                                                <td>{$subj_2}</td>
                                                <td>{$main_schedule[$day->id()][$pair->number()-1]->lectureHall_2()}</td>
                                                <td>{$main_schedule[$day->id()][$pair->number()-1]->teacher_2()}</td>
                                            {/if}
                                        </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>

    <script type="text/javascript">

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

    </script>

</form>