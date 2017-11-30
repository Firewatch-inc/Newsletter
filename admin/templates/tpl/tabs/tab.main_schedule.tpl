<div class="ui internally celled grid">
    <div class="row">
        <div class="sixteen wide column">
            {if $schedule != NULL}
                {foreach $schedule as $date => $data}
                    <div class="ui styled accordion" style="width: 100%;">
                        <div class="title">
                            {$date = (explode("_", $date))}
                            {$date[0]|date_format:"%d.%m.%Y"}
                        </div>
                        <div class="content">
                            <form name="saveScheduleForm" method="POST" class="ui form">
                                <input type="hidden" name="schedule_id" value="{$date[1]}">
                                <div class="field">
                                    <input type="submit" name="saveScheduleButton" value="Сохранить" class="ui primary button">
                                </div>
                                <div class="field">
                                    <table class="ui fixed table">
                                        <thead><!--
                                            <tr>
                                                <th>Показать/скрыть</th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="ui checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </th>
                                            </tr>-->
                                            <tr>
                                                <th></th>
                                                <th>104</th>
                                                <th>107</th>
                                                <th>109</th>
                                                <th>207</th>
                                                <th>209</th>
                                                <th>201</th>
                                                <th>300</th>
                                                <th>400</th>
                                                <th>401 (мал. акт. зал)</th>
                                                <th>405</th>
                                                <th>406</th>
                                                <th>409</th>
                                                <th>Актовый зал</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="14"><h2 class="date">{$date[0]|date_format:"%d.%m.%Y"}</h2></td>
                                            </tr>
                                            {foreach $data as $time => $one_entry}
                                                <tr>
                                                    <td>{$time}</td>
                                                    {if $one_entry != NULL}
                                                        {foreach $one_entry as $entry}
                                                            <td><textarea name="schedule[]">{$entry}</textarea></td>
                                                        {/foreach}
                                                    {else}
                                                        {$columns = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]}
                                                        {foreach $columns as $column}
                                                            <td><textarea name="schedule[]"></textarea></td>
                                                        {/foreach}
                                                    {/if}
                                                </tr>
                                            {/foreach}
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</div>