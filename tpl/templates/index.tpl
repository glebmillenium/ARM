<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Информационный портал ЕЭИСЦ</title>
		{foreach from=$css item=foo}
			<link rel="stylesheet" href="{$foo}">
		{/foreach}
		{foreach from=$js item=foo}
			<script type="text/javascript" src="{$foo}"></script>
		{/foreach}
		</script>
	<body>


		<div class="vladmaxi-top">
			<a>Вход в информационный портал ЕЭИСЦ</a>
			</span>
		<div class="clr"></div>
		</div>

		<div id="container">
			<form>
				<label for="name">Логин:</label>
				<input type="name">
				<label for="username">Пароль:</label>
				<input type="password"><br>
						<p><a href="#">Забыли пароль?</a></p>
				<div id="lower">
					<input type="checkbox"><label class="check" for="checkbox">Запомнить меня</label>
					<input type="button" value="Войти" onclick="checkLoginAndPassword();" >
				</div>
			</form>
		</div>
	</body>
</html>
	
	
	
	
	
		
	