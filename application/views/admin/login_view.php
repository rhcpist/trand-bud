<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Вход в админпанель</title>
	<link rel="stylesheet" href="/css/style.css">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

  <form method="post" action="" class="login">
    <p>
      <label for="login">Логин:</label>
      <input type="text" name="login" id="login" value="">
    </p>

    <p>
      <label for="password">Пароль:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <p class="login-submit">
      <input type="submit" name="enter" class="login-button" value="Войти">
    </p>

    <p class="forgot-password"><a href="index.html">Забыл пароль?</a></p>
    <span style="display: block;margin: 100px;width: 400px;font-size: 15px;color: #eee;"><?=$info;?></span>
  </form>
</body>
</html>