<div class="ui stackable grid">
    <div class="row">
        <div class="ten wide column">
            <form name="removeInstituteForm" method="POST" class="ui form">
                <div class="actions">
                    <input type="submit" name="removeInstituteButton" value="Удалить" class="ui red button" style="width: 100%;">  <!-- FIXME -->
                </div>
                <table class="ui table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Сокращение</th>
                            <th>Адрес</th>
                            <th>Выбрать</th>
                        </tr>
                    </thead>
                    <tbody>
                        {$i = 1}
                        {foreach $institutes as $institute}
                            <tr>
                                <td>{$i}</td>
                                <td>{$institute->caption()}</td>
                                <td>{$institute->shortCaption()}</td>
                                <td>{$institute->address()}</td>
                                <td style="text-align: center;"> <!-- FIXME -->
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="institutes[]" value="{$institute->id()}">
                                        <label for=""></label>
                                    </div>
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
                <form name="addInstituteForm" method="POST" class="ui form">
                    <div class="field">
                        <label>Название</label>
                        <input type="text" name="code" required>
                    </div>
                    <div class="field">
                        <label>Сокращение</label>
                        <input type="text" name="caption" required>
                    </div>
                    <div class="field">
                        <label>Адрес</label>
                        <input type="text" name="shortCaption" required>
                    </div>
                    <div class="field">
                        <input type="submit" name="addInstituteButton" value="Добавить" class="ui primary button">
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>