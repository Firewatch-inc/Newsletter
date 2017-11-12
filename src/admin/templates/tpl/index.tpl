{$title="Вход в панель администратора"}
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
							<div class="actions">
								<input type="submit">
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
									<tr>
										<td>1</td>
										<td>Супер пупер</td>
										<td>Кул А.Н.</td>
										<td>01.01.2017</td>
										<td style="text-align: center;">
											<div class="ui checkbox">
												<input type="checkbox">
												<label></label>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="six wide column">
							<div class="ui segments">
								<div class="ui segment">
									<form class="ui form">
										<div class="field">
											<label>Заголовок</label>
											<input type="text">
										</div>
										<div class="field">
											<label>Автор</label>
											<input type="text">
										</div>
										<div class="field">
											<label>Содержание</label>
											<textarea></textarea>
										</div>
										<div class="field">
											<label>Дата</label>
											<input type="date">
										</div>
										<div class="field">
											<input type="submit" class="ui basic positive button">
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