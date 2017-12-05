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
                <div class="two fields">
                    <div class="field">
                        <input type="submit" name="selectGroupScheduleButton" value="Выбрать" class="ui primary button">
                    </div>
                    <div class="field">
                        {$group_caption}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                {foreach $days as $day}
                    <div class="ui styled accordion">
                        <div class="active title">
                            <h2 align="center">{$day->caption()}</h2>
                        </div>
                        <div class="active content">
                            <table class="ui fixed table">
                                <thead>
                                    <tr>
                                        <th>Пара</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                        <th>Преподаватели</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $pairs as $pair}
                                        <tr>
                                            <td style="text-align: center;"> <!-- FIXME -->
                                                {$pair->number()} ({$pair->startTime()} - {$pair->endTime()})
                                                <input type="hidden" name="pair" value="{$pair->number()}">
                                            </td>
                                            <td>
                                                <div class="two fields" style="margin-bottom: 0px;">
                                                    {if $main_schedule[$day->id()][$pair->number()] != NULL}
                                                        {$subj_1 = $main_schedule[$day->id()][$pair->number()]->first_subject()->caption()}
                                                        {$subj_2 = $main_schedule[$day->id()][$pair->number()]->second_subject()->caption()}
                                                        <div class="field">
                                                            <input type="text" name="subject_1" value="{$subj_1}" list="subjects">
                                                        </div>
                                                        <div class="field">
                                                            <input type="text" name="subject_2" value="{$subj_2}" list="subjects">
                                                        </div>
                                                    {else}
                                                        <div class="field">
                                                            <input type="text" name="subject_1" value="" list="subjects">
                                                        </div>
                                                        <div class="field">
                                                            <input type="text" name="subject_2" value="" list="subjects">
                                                        </div>
                                                    {/if}
                                                </div>
                                            </td>
                                            <td>
                                                {if $main_schedule[$day->id()][$pair->number()] != NULL}
                                                    <input type="text" name="lecture_hall" value="{$main_schedule[$day->id()][$pair->number()]->lectureHall()}">
                                                {else}
                                                    <input type="text" name="lecture_hall" value="">
                                                {/if}
                                            </td>
                                            <td>
                                                {if $main_schedule[$day->id()][$pair->number()] != NULL}
                                                    <input type="text" name="teacher" value="{$main_schedule[$day->id()][$pair->number()]->teacher()}">
                                                {else}
                                                    <input type="text" name="teacher" value="">
                                                {/if}
                                            </td>
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

        $("[name='subject_1'], [name='subject_2']").on("change", function () {
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


        });

    </script>

</form>