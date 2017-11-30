<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            {if $courses != NULL}
                <form name="removeCoursesForm" method="POST">
                    <div class="actions">
                        <input type="submit" name="removeCourseButton" value="Удалить" class="ui red button">
                    </div>
                    <table class="ui table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Название курса</th>
                                <th>Адрес</th>
                                <th>Ответственный</th>
                                <th>Выбрать</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$i = 1}
                            {foreach $courses as $course}
                                <tr>
                                    <td>{$i}</td>
                                    <td>{$course->caption()}</td>
                                    <td>{$course->address()}</td>
                                    <td>{$course->contactor()}</td>
                                    <td>
                                        <div class="ui checkbox">
                                            <input type="checkbox" name="courses[]" value="{$course->id()}">
                                            <label></label>
                                        </div>
                                    </td>
                                </tr>
                                {$i = $i + 1}
                            {/foreach}
                        </tbody>
                    </table>
                </form>
            {else}
                <h1 align="center">Курсов нет</h1>
            {/if}
        </div>
        <div class="six wide column">
            <fieldset>
                <legend>Добавление курса</legend>
                <form name="addCourseForm" class="ui form" method="POST">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <label>Адрес</label>
                        <input type="text" name="address" required>
                    </div>
                    <div class="field">
                        <label>Ответственный</label>
                        <input type="text" name="contactor" required>
                    </div>
                    <div class="field">
                        <input type="submit" name="addCourseButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="sixteen wide column">
            <form name="saveCoursesScheduleForm" method="POST" class="ui form">
                <div class="field">
                    {if $courses_schedule != NULL}
                        <table class="ui celled table">
                            <thead>
                                <tr>
                                    <th>Курс</th>
                                    <th>ПН</th>
                                    <th>ВТ</th>
                                    <th>СР</th>
                                    <th>ЧТ</th>
                                    <th>ПТ</th>
                                    <th>СБ</th>
                                    <th>ВС</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $courses_schedule as $course}
                                    <tr>
                                        <td>
                                            {$course->course()->caption()}
                                        </td>
                                        {foreach $course->days() as $day}
                                            <td>
                                                {$time = explode("-", $day)}
                                                <div class="two fields">
                                                    <div class="field">            
                                                        <input type="text" name="start_time_row_{$course->course()->id()}[]" value="{$time[0]}">
                                                    </div>
                                                    <div class="field">
                                                        <input type="text" name="end_time_row_{$course->course()->id()}[]" value="{$time[1]}">
                                                    </div>
                                                </div>
                                            </td>
                                        {/foreach}
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    {else}
                        <h3 align="center">Расписание курсов временно недоступно</h3>
                    {/if}
                </div>
                <div class="field">
                    <input type="submit" name="saveCoursesScheduleButton" value="Сохранить" class="ui primary button">
                </div>
            </form>
        </div>
    </div>
</div>