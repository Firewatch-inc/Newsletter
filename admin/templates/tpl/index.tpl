{$title="Newsletter | Admin Panel"}
{include file="html/begin.tpl"}
<div class="ui grid">
	<div class="row">
		<div class="sixteen wide column">
            <div class="ui top attached tabular menu">
              <a class="active item" data-tab="news">Новости</a>
              <a class="item" data-tab="notes">Заметки</a>
			  <div class="right menu">
				<form name="logoutForm" method="POST">				
					<input type="submit" class="item" name="logoutButton" value="Выйти">
				</form>
			  </div>
            </div>
            <div class="ui bottom attached active tab segment" data-tab="news">
				<div class="ui internally celled grid">
					<div class="row">
						<div class="ten wide column">
                            <form name="removeNewsForm" method="POST">                         
                                <div class="actions">
                                    <input type="submit" name="removeNewsButton" value="Удалить" class="ui basic negative button">
                                </div>
                                <table class="ui table">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Загловок</th>
                                            <th>Автор</th>
                                            <th>Дата</th>
                                            <th>Выбрать</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {foreach from=$news item=$one_news}                                        
                                            <tr>
                                                <td>{$one_news->id()}</td>
                                                <td>{$one_news->caption()}</td>
                                                <td>{$one_news->author()}</td>
                                                <td>{$one_news->date()|date_format:"%d.%m.%Y"}</td>
                                                <td style="text-align: center;">
                                                    <div class="ui checkbox">
                                                        <input type="checkbox" name="id_news[]" value="{$one_news->id()}">
                                                        <label></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        {/foreach}
                                    </tbody>
                                </table>
                            </form>
						</div>
						<div class="six wide column">
							<div class="ui segments">
								<div class="ui segment">
									<form name="addNewsForm" method="POST" class="ui form">
										<div class="field">
											<label>Заголовок</label>
											<input type="text" name="n_caption">
										</div>
										<div class="field">
											<label>Автор</label>
											<input type="text" name="n_author">
										</div>
										<div class="field">
											<label>Содержание</label>
											<textarea name="n_content"></textarea>
										</div>
										<div class="field">
											<label>Дата</label>
											<input type="date" name="n_date">
										</div>
										<div class="field">
											<input type="submit" name="addNewsButton" class="ui basic positive button">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="notes">
				Notes
            </div>
		</div>
	</div>
</div>
{include file="html/end.tpl"} 