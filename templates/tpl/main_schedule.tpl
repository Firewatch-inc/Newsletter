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
                            <table class="ui fixed celled table">
                            
                                <thead>
                                    <tr> <!-- FIXME -->
                                        <th>Пара</th>
                                        <th>
                                            <table class="ui table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">Нечётная</th>
                                                        <th colspan="2">Чётная</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="text-align: center;">
                                                        <td>Пара</td>
                                                        <td>Аудитория</td>
                                                        <td>Пара</td>
                                                        <td>Аудитория</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </th>
                                        <th>Преподаватель</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <col width="10%">
                                    <col width="80%">
                                    <col width="10%">
                                    {foreach $pairs as $pair}
                                        <tr>
                                            <!-- FIXME: -->
                                            <td style="text-align: center;">{$pair->number()} ({$pair->startTime()} - {$pair->endTime()})</td>
                                            <td class="ui form">
                                                {if $main_schedule[$day->id()][$pair->number()-1] != NULL}
                                                    {$subj_1 = $main_schedule[$day->id()][$pair->number()-1]->first_subject()->caption()}
                                                    {$subj_2 = $main_schedule[$day->id()][$pair->number()-1]->second_subject()->caption()}
                                                    {if $subj_1 === $subj_2}
                                                        <div class="four fields">
                                                            <div class="field">
                                                                {$subj_1}
                                                            </div>
                                                            <div class="field"  style="text-align: center;">
                                                                {$main_schedule[$day->id()][$pair->number()-1]->lectureHall_1()}
                                                            </div>
                                                            <div class="field">
                                                                {$subj_2}
                                                            </div>
                                                            <div class="field"  style="text-align: center;">
                                                                {$main_schedule[$day->id()][$pair->number()-1]->lectureHall_2()}
                                                            </div>
                                                        </div>
                                                    {else}
                                                        <div class="four fields">
                                                            <div class="field">
                                                                {$subj_1}
                                                            </div>
                                                            <div class="field"  style="text-align: center;">
                                                                {$main_schedule[$day->id()][$pair->number()-1]->lectureHall_1()}
                                                            </div>
                                                            <div class="field">
                                                                {$subj_2}
                                                            </div>
                                                            <div class="field"  style="text-align: center;">
                                                                {$main_schedule[$day->id()][$pair->number()-1]->lectureHall_2()}
                                                            </div>
                                                        </div>
                                                    {/if}
                                                {/if}
                                            </td>
                                            <td>
                                                {if $main_schedule[$day->id()][$pair->number()-1] != NULL}
                                                    {$main_schedule[$day->id()][$pair->number()-1]->teacher()}
                                                {/if}
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