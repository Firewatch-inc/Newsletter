<form name="saveMainScheduleForm" method="POST" class="ui form">
    <datalist id="subjects">
        {foreach $subjects as $subject}
            <option value="{$subject->id()}">{$subject->caption()}</option>
        {/foreach}
    </datalist>
    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <div class="three fields">
                    <div class="field">
                        <label>Институт</label>
                        <select>
                            {foreach $institutes as $institute}
                                <option value="{$institute->id()}">{$institute->caption()}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <label>Учебный курс</label>
                        <select>
                            {foreach $educationCourses as $educationCourse}
                                <option value="{$educationCourse->id()}">{$educationCourse->number()}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="field">
                        <label>Группа</label>
                        <select>
                            {foreach $groups as $group}
                                <option value="{$group->id()}">{$group->caption()}</option>
                            {/foreach}
                        </select>
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
                                                    <div class="field">
                                                        <input type="text" list="subjects">
                                                    </div>
                                                    <div class="field">
                                                        <input type="text" list="subjects">
                                                    </div>
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
</form>