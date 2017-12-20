{$title="Newsletter | Панель управления"}
{include file="html/begin.tpl"}
<div class="ui grid">
	<div class="row">
		<div class="sixteen wide column">
            <div class="ui top attached tabular menu">
              <a class="active item" data-tab="schedule">Основное расписание</a>
			  <a class="item" data-tab="change_schedule">Изменения в расписании</a>
			  <a class="item" data-tab="courses">Элективные курсы</a>
			  <a class="item" data-tab="institutes">Институты</a>
			  <a class="item" data-tab="groups">Группы</a>
			  {* <a class="item" data-tab="specialties">Специальности</a> *}
			  <a class="item" data-tab="subjects">Предметы</a>
			  <a class="item" data-tab="settings">Настройки</a>
			  <div class="right menu">
				<form name="logoutForm" method="POST">				
					<input type="submit" class="item" name="logoutButton" value="Выйти">
				</form>
			  </div>
            </div>
            <div class="ui bottom attached active tab segment" data-tab="schedule">
				{include file="tabs/tab.main_schedule.tpl"}
            </div>
            <div class="ui bottom attached tab segment" data-tab="change_schedule">
				{include file="tabs/tab.change_schedule.tpl"}
			</div>
            <div class="ui bottom attached tab segment" data-tab="courses">
				{include file="tabs/tab.dop_schedule.tpl"}
			</div>
			<div class="ui bottom attached tab segment" data-tab="institutes">
                {include file="tabs/tab.institutes.tpl"}
			</div>
            <div class="ui bottom attached tab segment" data-tab="groups">
				{include file="tabs/tab.groups.tpl"}
			</div>
			{*<div class="ui bottom attached tab segment" data-tab="specialties">
				{include file="tabs/tab.specialties.tpl"}
			</div>*}
			<div class="ui bottom attached tab segment" data-tab="subjects">
                {include file="tabs/tab.subjects.tpl"}
			</div>
			<div class="ui bottom attached tab segment" data-tab="settings">
				{include file="tabs/tab.settings.tpl"}
			</div>
		</div>
	</div>
</div>
{include file="html/end.tpl"} 