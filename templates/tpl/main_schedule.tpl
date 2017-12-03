{$title = "Newsletter | Основное расписание"}
{include file="html/begin.tpl"}
    <div class="ui grid">
        <div class="row">
            <div class="sixteen wide column">
                <!-- FIXME: -->
                <a class="ui primary button" style="width: 100%; font-size: 25px;" href="index.php">Назад</a>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <h1 align="center">{$institute}</h1>
                <h2 align="center">Группа: <u>{$group}</u></h2>
                <h3 align="center">Форма обучения: <b>{$education_form}</b></h3>
            </div>
        </div>
        <div class="row">
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
                                    <th>
                                        <table class="ui table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Предмет</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td>
                                                        Чётная
                                                    </td>
                                                    <td>
                                                        Нечётная
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </th>
                                    <th>Аудитория</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {foreach $pairs as $pair}
                                        <tr>
                                            <td>{$pair->number()} ({$pair->startTime()} - {$pair->endTime()})</td>
                                            <td class="ui form">
                                                {if $main_schedule[$day->id()][$pair->number()] != NULL}
                                                    {$subj_1 = $main_schedule[$day->id()][$pair->number()]->first_subject()->caption()}
                                                    {$subj_2 = $main_schedule[$day->id()][$pair->number()]->second_subject()->caption()}

                                                    {if $subj_1 === $subj_2}
                                                        <div class="field">
                                                            {$subj_1}
                                                        </div>
                                                    {else}
                                                        <div class="two fields">
                                                            <div class="field">
                                                                {$subj_1}
                                                            </div>
                                                            <div class="field">
                                                                {$subj_2}
                                                            </div>
                                                        </div>
                                                    {/if}
                                                {/if}
                                            </td>
                                            <td>

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
        <div class="row">
            <div class="sixteen wide column">
                <!-- FIXME: -->
                <a class="ui primary button" style="width: 100%; font-size: 25px;" href="index.php">Назад</a>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $('.ui.accordion').accordion();
    
    </script>
{include file="html/end.tpl"}