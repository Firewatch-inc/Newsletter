<form name="saveSettings" method="POST" class="ui form">
    <div class="two fields">
        <div class="field">
            <div class="two fields">
                <div class="field">
                    <select name="updateInterval">
                        {if $settings['update_interval'] == 0}
                            <option value="0">Не обновлять</option>
                            <option value="5">5 минут</option>
                            <option value="15">15 минут</option>
                        {elseif $settings['update_interval'] == 5}
                            <option value="5">5 минут</option>
                            <option value="0">Не обновлять</option>
                            <option value="15">15 минут</option>
                        {elseif $settings['update_interval'] == 15}
                        <option value="15">15 минут</option>
                            <option value="5">5 минут</option>
                            <option value="0">Не обновлять</option>
                        {/if}
                    </select>
                </div>
                <div class="field">
                    <input type="submit" name="setUpdateIntervalButton" value="Задать интервал обновления" class="ui button">
                </div>
            </div>
        </div>
    </div>
</form>