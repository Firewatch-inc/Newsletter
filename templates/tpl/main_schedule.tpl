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
                                    <tr>
                                        <th></th>
                                        <th colspan="3">Нечётная</th>
                                        <th colspan="3">Чётная</th>
                                    </tr>
                                    <tr> <!-- FIXME -->
                                        <th>Пара</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                        <th>Преподаватель</th>
                                        <th>Предмет</th>
                                        <th>Аудитория</th>
                                        <th>Преподаватель</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $pairs as $pair}
                                        <tr>
                                            <!-- FIXME: -->
                                            <td style="text-align: center;">{$pair->number()} ({$pair->startTime()} - {$pair->endTime()})</td>
                                            {if $main_schedule[$day->id()][$pair->number()-1] != NULL}
                                                {$subj_1 = $main_schedule[$day->id()][$pair->number()-1]->first_subject()->caption()}
                                                {$subj_2 = $main_schedule[$day->id()][$pair->number()-1]->second_subject()->caption()}
                                                <td>{$subj_1}</td>
                                                <td>{$main_schedule[$day->id()][$pair->number()-1]->lectureHall_1()}</td>
                                                <td>{$main_schedule[$day->id()][$pair->number()-1]->teacher_1()}</td>
                                                <td>{$subj_2}</td>
                                                <td>{$main_schedule[$day->id()][$pair->number()-1]->lectureHall_2()}</td>
                                                <td>{$main_schedule[$day->id()][$pair->number()-1]->teacher_2()}</td>
                                            {/if}
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