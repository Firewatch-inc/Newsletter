<div class="ui stackable grid">
    <div class="row">
        <div class="sixteen wide column">
            <div class="ui statistics">
                <div class="statistic">
                    <div class="value">
                        {count($institutes)}
                    </div>
                    <div class="label">
                        Институтов
                    </div>
                </div>
                <div class="statistic">
                    <div class="value">
                        {$count_groups}
                    </div>
                    <div class="label">
                        Групп
                    </div>
                </div>
                <div class="statistic">
                    <div class="value">
                        {count($specialties)}
                    </div>
                    <div class="label">
                        Специальностей
                    </div>
                </div>
                <div class="statistic">
                    <div class="value">
                        {count($subjects)}
                    </div>
                    <div class="label">
                        Предметов
                    </div>
                </div>
                <div class="statistic">
                    <div class="value">
                        0
                    </div>
                    <div class="label">
                        Изменений в расписании
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="eight wide column">
            <fieldset>
                <legend><b>Дни недели</b></legend>
                <table class="ui table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Скоращённое обозначение</th>
                        <th>Полное обозначение</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $days as $day}
                        <tr>
                            <td>{$day->number()}</td>
                            <td>{$day->shortCaption()}</td>
                            <td>{$day->caption()}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </fieldset>
        </div>
        <div class="eight wide column">
                    <fieldset>
                        <legend><b>Пары</b></legend>
                        <table class="ui table">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Время</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach $pairs as $pair}
                                <tr>
                                    <td>{$pair->number()}</td>
                                    <td>{$pair->startTime()} - {$pair->endTime()}</td>
                                </tr>
                            {/foreach}
                            </tbody>
                        </table>
                    </fieldset>
        </div>
    </div>
</div>