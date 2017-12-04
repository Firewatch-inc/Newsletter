<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            <form name="removeSpecialtyForm" method="POST" class="ui form">
                <div class="actions">
                    <input type="submit" name="removeSpecialtyButton" value="Удалить" class="ui red button" style="width: 100%;">  <!-- FIXME -->
                </div>
                <table class="ui table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Название</th>
                        <th>Код</th>
                        <th>Выбрать</th>
                    </tr>
                    </thead>
                    <tbody>
                    {$i = 1}
                    {foreach $specialties as $specialty}
                        <tr>
                            <td>{$i}</td>
                            <td>{$specialty->caption()}</td>
                            <td>{$specialty->code()}</td>
                            <td style="text-align: center;"> <!-- FIXME -->
                                {if $specialty->id() != 1}
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="specialties[]" value="{$specialty->id()}">
                                        <label for=""></label>
                                    </div>
                                {/if}
                            </td>
                        </tr>
                        {$i = $i + 1}
                    {/foreach}
                    </tbody>
                </table>
            </form>
        </div>
        <div class="six wide column">
            <fieldset>
                <legend><b>Добавление специальности</b></legend>
                <form name="addSpecialtyForm" method="POST" class="ui form">
                    <div class="field">
                        <label>Код</label>
                        <input type="text" name="code" required>
                    </div>
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <input type="submit" name="addSpecialtyButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>