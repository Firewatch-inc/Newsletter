<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            {if $groups != NULL}
                <form name="removeCoursesForm" method="POST">
                    <div class="actions">
                        <input type="submit" name="removeCourseButton" value="Удалить" class="ui red button">
                    </div>
                    {foreach $groups as $institute => $group}
                        <fieldset>
                            <legend><b>{$institute}</b></legend>
                            <table class="ui table">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Шифр группы</th>
                                        <th>Специальность</th>
                                        <th>Форма обучения</th>
                                        <th>Курс</th>
                                        <th>Выбрать</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {$i = 1}
                                    {foreach $group as $g}
                                        <tr>
                                            <td>{$i}</td>
                                            <td>{$g->caption()}</td>
                                            <td>{$g->specialty()}</td>
                                            <td>{$g->educationForm()}</td>
                                            <td>{$g->educationCourse()}</td>
                                            <td>
                                                <div class="ui checkbox">
                                                    <input type="checkbox" name="groups[]" value="{$g->id()}">
                                                    <label></label>
                                                </div>
                                            </td>
                                        </tr>
                                        {$i = $i + 1}
                                    {/foreach}
                                </tbody>
                            </table>
                        </fieldset>
                    {/foreach}
                </form>
            {else}
                <h1 align="center">Групп нет</h1>
            {/if}
        </div>
        <div class="six wide column">
            <fieldset>
                <legend><b>Добавление группы</b></legend>
                <form name="addCourseForm" class="ui form" method="POST">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <label>Специализация</label>
                        <select name="specialty">
                            {foreach $specialties as $specialty}
                                <option></option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <label>Форма обучения</label>
                        <select name="educationForm">
                            {foreach $educationForms as $educationForm}
                                <option value="{$educationForm->id()}">{$educationForm->caption()}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <label>Курс</label>
                        <select name="educationCourse">
                            {foreach $educationCourses as $educationCourse}
                                <option value="{$educationCourse->id()}">{$educationCourse->number()}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <input type="submit" name="addCourseButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>