<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title><?= $this->renderSection("title") ?></title>
</head>
<body>

<a href="<?= "http://localhost" ?>">Home</a>

	<?php if (current_user()):?>

	

	<p>Hola <?=esc(current_user()->name) ?></p>

	<?php if (current_user()->is_admin):?>

		<a href="<?= "/admin/users" ?>">Users</a>
		
		<?php endif?>

	<a href="<?= "http://localhost/tasks" ?>">Tasks</a>

	<a href="<?= "http://localhost/logout" ?>">Log out</a>

	<?php else:?>

	

	<a href="<?= "http://localhost/signup/new" ?>">Sign up</a>

	<a href="<?= "http://localhost/login/new" ?>">Log in</a>

	<?php endif?>



	<?php if (session()->has("warning")): ?>
		<div class="warning">
		<?= session("warning") ?>
		</div>
		<?php endif; ?>

		<?php if (session()->has("info")): ?>
		<div class="info">
		<?= session("info") ?>
		</div>
		<?php endif; ?>

		<?php if (session()->has("error")): ?>
		<div class="info">
		<?= session("info") ?>
		</div>
		<?php endif; ?>
	<?= $this->renderSection("content") ?>
</body>
</html>
