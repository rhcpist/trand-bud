<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Добавить новую категорию товара</title>
	
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
			<li class="icn_new_article"><a href="<?php base_url();?>/admin/add/product_category">Добавить категорию</a></li>
                        <li class="icn_new_article"><a href="<?php base_url();?>/admin/add/product">Добавить товар</a></li>
			<li class="icn_edit_article"><a href="<?php echo site_url().'/admin/editlist/';?>product_category">Редактировать категорию</a></li>
                        <li class="icn_edit_article"><a href="<?php echo site_url().'/admin/editlist/';?>product">Редактировать товар</a></li>
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
<article class="module width_full">
    <form method="post" action="<?=base_url();?>index.php/admin/edit/edit_product_category/<?=$pages_info['id'];?>" enctype="multipart/form-data">
			<header><h3 style="text-align: center;">Редактировать категорию товара</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Название категории с товаром</label>
                                                        <input type="text" name="title" value="<?=$pages_info['title'];?>">
                                                        <div class="error"><?=form_error('title');?></div>
						</fieldset>
						<fieldset>
							<label>Описание категории</label>
							<textarea name="description" rows="12"><?=$pages_info['description'];?></textarea>
                                                        <div class="error" style="width:200px;"><?=form_error('description');?></div>
						</fieldset>
						<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Выбрать фото</label>
							<div class="fileform">
                                                            <input id="upload" type="file" name="upload" style="width:92%;"/>
                                                            <!--<div class="error"><?=form_error('upload');?></div>-->
                                                        </div>
						</fieldset>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							
						</fieldset><div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
                                        <select name="hidden">
						<option value="1" <?=set_select('hidden', 1, TRUE);?>>Опубликовать</option>
						<option value="2" <?=set_select('hidden', 0);?>>Скрыть</option>
					</select>
                                    <input type="submit" name="edit" value="Сохранить" class="alt_btn"/>
				    <input type="reset" value="Сброс">
				</div>
			</footer>
    </form>                    
</article><!-- end of post new article -->
</section>
</body>
</html>