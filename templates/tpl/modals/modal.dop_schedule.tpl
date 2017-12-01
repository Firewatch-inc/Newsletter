<div class="ui fullscreen longer modal" id="dop_schedule">
    <div class="header">
        Расписание элективных курсов
    </div>
    <div class="content">
        {if $courses != NULL}
            <table class="ui striped table">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Курс</th>
                        <th>ПН</th>
                        <th>ВТ</th>
                        <th>СР</th>
                        <th>ЧТ</th>
                        <th>ПТ</th>
                        <th>СБ</th>
                        <th>ВС</th>
                        <th>Адрес</th>
                        <th>Ответственный</th>
                    </tr>
                </thead>
                <tbody>
                    {$i = 1}
                    {foreach $courses as $course}
                        <tr>
                            <td>
                                <div class="ui ribbon label">{$i}</div>
                            </td>
                            <td>
                                {$course->course()->caption()}
                            </td>
                            {foreach $course->days() as $day}
                                <td>{$day}</td>
                            {/foreach}
                            <td>
                                {$course->course()->address()}
                            </td>
                            <td>
                                {$course->course()->contactor()}
                            </td>
                        </tr>
                        {$i = $i + 1}
                    {/foreach}
                </tbody>
            </table>
        {else}
            <h3 align="center">Расписание курсов временно недоступно</h3>
        {/if}
    </div>
    <div class="actions">
        <div class="ui cancel red button">Закрыть</div>
    </div>
</div>