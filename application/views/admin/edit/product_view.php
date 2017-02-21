<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Добавить новый товар</title>
	
	<link rel="stylesheet" href="/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>


<body> 
<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="<?php echo site_url().'/admin';?>">TREND-BUD</a></h1>
                        <h2 class="section_title"><a href="<?php echo site_url().'/admin';?>">Административная панель</a></h2><div class="btn_view_site"><a href="<?=base_url();?>">Показать сайт</a></div>
		</hgroup>
</header> <!-- end of header bar -->
	
<section id="secondary_bar">
		<div class="user">
			<p>Администратор</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="<?=base_url();?>">Сайт</a> <div class="breadcrumb_divider"></div> <a class="current">Админка</a></article>
		</div>
</section><!-- end of secondary bar -->    
    
<aside id="sidebar" class="column" style="height:1000px;">
		<form class="quick_search">
			<input type="text" value="Поиск" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Контент</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="<?php echo site_url().'/admin/add/';?>product_category">Добавить категорию</a></li>
                        <li class="icn_new_article"><a href="<?php echo site_url().'/admin/add/';?>product">Добавить товар</a></li>
			<li class="icn_edit_article"><a href="<?php base_url();?>product_category">Редактировать категорию</a></li>
                        <li class="icn_edit_article"><a href="<?php base_url();?>product">Редактировать товар</a></li>
			<!--<li class="icn_categories"><a href="#">Categories</a></li>
			<li class="icn_tags"><a href="#">Tags</a></li>
		</ul>
		<!--<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="#">Add New User</a></li>
			<li class="icn_view_users"><a href="#">View Users</a></li>
			<li class="icn_profile"><a href="#">Your Profile</a></li>
		</ul>
		<h3>Media</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="#">File Manager</a></li>
			<li class="icn_photo"><a href="#">Gallery</a></li>
			<li class="icn_audio"><a href="#">Audio</a></li>
			<li class="icn_video"><a href="#">Video</a></li>
		</ul>
		<h3>Admin</h3>-->
		<!--<ul class="toggle">
			<li class="icn_settings"><a href="#">Options</a></li>
			<li class="icn_security"><a href="#">Security</a></li>--><br><br>
			<li class="icn_jump_back"><a href="<?=base_url();?>admin/logout">Выйти</a></li>
		<!--</ul>-->
		
		<footer>
			<hr />
			<p><strong>Все права защищены; 2016</strong></p>
			<p>Theme by <a href="#">ZeeZeeZaZuZu Art Studio</a></p>
		</footer>
	</aside><!-- end of sidebar -->    
<section id="main" class="column" style="min-height: 1000px;">   
    <article class="module width_3_quarter">
        <header><h3 class="tabs_involved">Все товары</h3>
                    </header>

                    <div class="tab_container">
                            <div id="tab1" class="tab_content">
                            <table class="tablesorter" cellspacing="0"> 
                            <thead> 
                                    <tr> 
                                    <th>ID</th> 
                                    <th>Товар</th> 
                                    <th>Описание товара</th>
                                    <th>Цена</th>
                                    <th>Категория</th>
                                    <th>Редактировать</th> 
                                    </tr> 
                            </thead> 
                            <tbody> 
                                    <?php foreach ($edit as $item):?>
                                    <tr> 
                                    <td><?=$item['id'];?></td>
                                    <td><?=$item['title'];?></td>  
                                    <td><?=$item['description'];?></td> 
                                    <td><?=$item['price'];?></td> 
                                    <td><a target="_blank" href="<?php echo site_url().'/category/'.$item['category_id'];?>"><?=$item['cat_name'];?></a></td>
                                    <td><a href="<?=base_url();?>admin/edit/edit_<?=$page?>/<?=$item['id'];?>"><input type="image" src="/images/icons/icn_edit.png" title="Редактировать"></a><a href="<?=base_url();?>admin/del/<?=$page?>/<?=$item['id'];?>"><input type="image" src="/images/icons/icn_trash.png" name="del" title="Удалить"></a></td> 
                                    </tr> 
                                    <?php endforeach;?>
                            </tbody> 
                            </table>
                            </div><!-- end of #tab1 -->

                    </div><!-- end of .tab_container -->

                    </article><!-- end of content manager article -->

                  
</section>

<script type="text/javascript">
  
</script>
</body>
</html>