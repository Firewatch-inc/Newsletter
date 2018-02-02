<div class="ui modal" id="main_schedule">
    <div class="header">
        Основное расписание
    </div>
    <div class="content">
{*
        <form name="showMainScheduleForm" method="POST" class="ui form">
            {if $institutes != NULL && $courses != NULL && $groups != NULL}
                <div class="field">
                    <label>Институт</label>
                    <input type="hidden" name="institute_caption" value="">
                    <select name="institute" required>
                        {foreach $institutes as $institute}
                            <option value="{$institute->id()}">{$institute->caption()}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="field">
                    <label>Курс</label>
                    <select name="education_course" required>
                        {foreach $educationCourses as $educationCourse}
                            <option value="{$educationCourse->id()}">{$educationCourse->number()}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="field">
                    <label>Группа</label>
                    <select name="group" required></select>
                </div>
                <div class="field">
                    <label>Форма обучения</label>
                    <select name="education_form" required>
                        {foreach $educationForms as $educationForm}
                            <option value="{$educationForm->id()}">{$educationForm->caption()}</option>
                        {/foreach}
                    </select>
                </div>
            {else}
                <h3 align="center">На данный момент расписание не доступно</h3>
            {/if}
            <div class="field" style="text-align: center;">
                <input type="submit" name="showMainScheduleButton" value="Показать" id="showMainSchedule"  class="ui primary button">
            </div>
        </form>
	*}
<h2 align="center">Расписание находиться на модерации</h2>
    </div>
</div>
