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
                <h1 align="center">{$data['institute']}. Группа {$data['group']}. Форма обучения: {$data['education_form']}</h1>
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
    </div>

    <script type="text/javascript">

        $('.ui.accordion').accordion();
    
    </script>
{include file="html/end.tpl"}