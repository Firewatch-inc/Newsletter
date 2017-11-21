{$title="Newsletter | Панель управления"}
{include file="html/begin.tpl"}
<div class="ui grid">
	<div class="row">
		<div class="sixteen wide column">
            <div class="ui top attached tabular menu">
              <a class="active item" data-tab="schedule">Расписание</a>
              <a class="item" data-tab="notes">Объявления</a>
			  <div class="right menu">
				<form name="logoutForm" method="POST">				
					<input type="submit" class="item" name="logoutButton" value="Выйти">
				</form>
			  </div>
            </div>
            <div class="ui bottom attached active tab segment" data-tab="schedule">
				<div class="ui internally celled grid">
					<div class="row">
						<div class="sixteen wide column">
                            <form name="saveScheduleForm" method="POST" class="ui form">
								<div class="field">
									<input type="submit" name="saveScheduleButton" value="Сохранить" class="ui primary button">
								</div>
								<div class="field">
									<table class="ui fixed table">
										<thead>
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
											</tr>
											<tr>
												<th>
													
												</th>
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
												<td colspan="14"><h2 class="date"><input type="date"></h2></td>
											</tr>
											{foreach $schedule as $time => $data}
												<tr>
													<td>{$time}</td>
													{foreach $data as $entry}
														<td><textarea name="schedule[]">{$entry}</textarea></td>
													{/foreach}
												</tr>
											{/foreach}
										</tbody>
									</table>
								</div>
                            </form>
						</div>
					</div>
				</div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="notes">
				<div class="ui stackable grid">
					<div class="row">
						<div class="ten wide column">
							{if $notes != NULL}
								<table class="ui table">
									<thead>
										<tr>
											<th>№</th>
											<th>Заголовок</th>
											<th>Дата</th>
											<th>Выбрать</th>
										</tr>
									</thead>
									<tbody>
										{$i = 1}
										{foreach $notes as $note}
											<tr>
												<td>{$i}</td>
												<td>{$note->caption()}</td>
												<td>{$note->date()|date_format:"%d.%m.%Y"}</td>
												<td>
													<div class="ui checkbox">
														<input type="checkbox" name="notes[]">
														<label></label>
													</div>
												</td>
											</tr>
											{$i = $i + 1}
										{/foreach}
									</tbody>
								</table>
							{else}
								<h1 align="center">Объявлений нет</h1>
							{/if}
						</div>
						<div class="six wide column">
							<fieldset>
								<legend>Добавление Объявления</legend>
								<form name="addNoteForm" class="ui form" method="POST">
									<div class="field">
										<label>Заголовок</label>
										<input type="text" name="caption">
									</div>
									<div class="field">
										<label>Содержание</label>
										<textarea name="content"></textarea>
									</div>
									<div class="field">
										<label>Дата</label>
										<input type="date" name="date">
									</div>
									<div class="field">
										<input type="submit" name="addNoteButton" value="Добавить" class="ui primary button">
									</div>
								</form>
							</fieldset>
						</div>
					</div>
				</div>
            </div>
		</div>
	</div>
</div>
{include file="html/end.tpl"} 