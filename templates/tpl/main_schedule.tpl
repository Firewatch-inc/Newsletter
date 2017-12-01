{$title = "Newsletter | Основное расписание"}
{include file="html/begin.tpl"}
    <div class="ui grid">
            <div class="row">
                <div class="sixteen wide column">
                    <a class="ui primary button" href="index.php">Назад</a>
                </div>
            </div>
        <div class="row">
            <div class="sixteen wide column">
                <h1 align="center">{$data['institute']}. Группа {$data['group']}</h1>
            </div>
        </div>
        <div class="row" style="padding: 15px;">
            <div class="sixteen wide column">
                {foreach $days as $day}
                    <div class="ui styled accordion">
                        <div class="active title">
                            {$day->caption()}
                        </div>
                        <div class="active content">
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

                                            </td>
                                        </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                {/foreach}
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $('.ui.accordion').accordion();
    
    </script>
{include file="html/end.tpl"}