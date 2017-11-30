<div class="ui modal" id="main_schedule">
    <div class="header">
        Основное расписание
    </div>
    <div class="content">
        <form class="ui form">
            {if $institutes != NULL && $courses != NULL && $groups != NULL}
                <div class="field">
                    <label>Институт</label>
                    <select name="institute">
                        {foreach $institutes as $institute}
                            <option>{$institute->caption()}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="field">
                    <label>Курс</label>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="field">
                    <label>Группа</label>
                    <select>
                        <option>16.03.03</option>
                    </select>
                </div>
                <div class="field" style="text-align: center;">
                    <input type="submit" name="showSchedule" value="Показать" class="ui primary button">
                </div>
            {else}
                <h3 align="center">На данный момент расписание не доступно</h3>
            {/if}
        </form>
    </div>
</div>