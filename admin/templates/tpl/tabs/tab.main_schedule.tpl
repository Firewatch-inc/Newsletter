<form name="saveMainScheduleForm" method="POST" class="ui form">
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
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Понедельник
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
                                <tr>
                                    <td>ПН</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ВТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СР</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ЧТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ПТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СБ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Вторник
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
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Среда
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
                                <tr>
                                    <td>ПН</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ВТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СР</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ЧТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ПТ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>СБ</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Четверг
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
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Пятница
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
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui styled accordion">
                    <div class="title">
                        Суббота
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
                                        <tr>
                                            <td>ПН</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ВТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СР</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ЧТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ПТ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>СБ</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>