<form name="saveMainScheduleForm" method="POST" class="ui form">
    <datalist id="subjects">
        {*
        {foreach $subjects as $subject}
            <option value="{$subject->id()}">{$subject->caption()}</option>
        {/foreach}
        *}
    </datalist>
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
                    </div>
                </div>
                <div class="field">
                    <input type="submit" name="selectGroupScheduleButton" value="Выбрать" class="ui primary button">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                {foreach $days as $day}
                    <br>
                    <div class="ui styled accordion">
                        <div class="title">
                            {$day->caption()}
                        </div>
                        <div class="content">
                            <table class="ui fixed table">
                                <thead>
                                    <tr>
                                        <th>Пара</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $pairs as $pair}
                                        <tr>
                                            <td>{$pair->number()} ({$pair->startTime()} - {$pair->endTime()})</td>
                                            <td>
                                                <div class="two fields">
                                                    {if $main_schedule[$day->id()][$pair->number()] != NULL}
                                                        {$subj_1 = $main_schedule[$day->id()][$pair->number()]->first_subject()->caption()}
                                                        {$subj_2 = $main_schedule[$day->id()][$pair->number()]->second_subject()->caption()}
                                                        <div class="field">
                                                            <input type="text" value="{$subj_1}" list="subjects">
                                                        </div>
                                                        <div class="field">
                                                            <input type="text" value="{$subj_2}" list="subjects">
                                                        </div>
                                                    {else}
                                                        <div class="field">
                                                            <input type="text" value="" list="subjects">
                                                        </div>
                                                        <div class="field">
                                                            <input type="text" value="" list="subjects">
                                                        </div>
                                                    {/if}
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text">
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

    </script>

</form>