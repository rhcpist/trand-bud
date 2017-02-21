<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>
</head>
<body>
<form action="<?=base_url();?>index.php/first/upload_photo" method="post" enctype="multipart/form-data">
	<input type="file" name="userfile" />
	<input type="submit" name="download" value="Загрузить"/>
</form>
	
</body>
</html>