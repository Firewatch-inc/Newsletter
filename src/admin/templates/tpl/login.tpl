{$title="Newsletter | Admin Panel"}
{include file="html/begin.tpl"}
<div class="ui center aligned grid">
	<div class="column" style="width: 350px; height: 100vh; display: flex; flex-direction: column; justify-content: center;">
		<h2 class="ui orange image header">
			<div class="content">
				Newsletter
			</div>
		</h2>
		<form name="loginForm" method="POST" class="ui form">
			<div class="ui segment">
				<div class="field">
					<div class="ui left icon input">
						<i class="mail icon"></i>
						<input type="text" name="login" placeholder="Логин" required>
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
						<i class="lock icon"></i>
						<input type="password" name="passwd" placeholder="Пароль" required>
					</div>
				</div>
				<input type="submit" name="loginButton" value="Войти" class="ui fluid large primary button">
			</div>
		</form>
	</div>
</div>
{include file="html/end.tpl"}