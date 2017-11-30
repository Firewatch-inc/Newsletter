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
</div>