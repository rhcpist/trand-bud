<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?= base_url();?>index.php/add_article" method="post">
		Название статьи: <br><input type="text" name="title" value="<?=set_value('title');?>"><?=form_error('title');?><br>
		Текст статьи: <br><textarea name="text" cols="40" rows="10"><?=set_value('text');?><?=form_error('text');?></textarea><br>
		Дата добавления: <br><input type="text" name="date" value="<?=set_value('date');?>"><?=form_error('date');?><br>
		<input type="submit" name="add" value="Добавить">
	</form>
</body>
</html>