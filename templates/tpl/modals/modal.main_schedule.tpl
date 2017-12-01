<div class="ui modal" id="main_schedule">
    <div class="header">
        Основное расписание
    </div>
    <div class="content">
        <form name="showMainScheduleForm" method="POST" class="ui form">
            {if $institutes != NULL && $courses != NULL && $groups != NULL}
                <div class="field">
                    <label>Институт</label>
                    <select name="institute" required>
                        {foreach $institutes as $institute}
                            <option value="{$institute->id()}">{$institute->caption()}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="field">
                    <label>Курс</label>
                    <select name="educationCourse" required>
                        {foreach $educationCourses as $educationCourse}
                            <option value="{$educationCourse->id()}">{$educationCourse->number()}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="field">
                    <label>Группа</label>
                    <select name="group" required>
                        {foreach $groups as $group}
                            <option value="{$group->id()}">{$group->caption()}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="field">
                    <label>Форма обучения</label>
                    <div class="three fields">
                        {foreach $educationForms as $educationForm}
                            <div class="field">
                                <div class="ui checkbox">
                                    <input type="radio" name="educationForm" value="{$educationForm->id()}" required>
                                    <label>{$educationForm->caption()}</label>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                </div>
            {else}
                <h3 align="center">На данный момент расписание не доступно</h3>
            {/if}
            <div class="field" style="text-align: center;">
                <input type="submit" name="showMainScheduleButton" value="Показать" id="showMainSchedule"  class="ui primary button">
            </div>
        </form>
    </div>
</div>