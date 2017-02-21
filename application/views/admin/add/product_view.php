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
			<li class="icn_new_article"><a href="<?php base_url()?>product_category">Добавить категорию</a></li>
                        <li class="icn_new_article"><a href="<?php base_url()?>product">Добавить товар</a></li>
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
    <form method="post" action="<?=base_url();?>index.php/admin/add/product" enctype="multipart/form-data" id="product_form">
			<header><h3 style="text-align: center;">Добавить новый товар</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Название нового товара</label>
                                                        <input type="text" name="title" value="<?=set_value('title');?>"/>
                                                        <div class="error"><?=form_error('title');?></div>
						</fieldset>
						<fieldset>
							<label>Характеристики товара</label>
                                                        <textarea rows="2" name="description"><?=set_value('description');?></textarea>
                                                        <div class="error" style="width:200px;"><?=form_error('description');?></div>
						</fieldset>
                                                <fieldset style="width:48%; float:left; margin-right: 3%;">
                                                        <label>Цена товара</label>
                                                        <input type="text" name="price" value="<?=set_value('price');?>"/>
                                                </fieldset>   
						<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Выбрать фото</label>
							<div class="fileform">                                                           
                                                                <input id="upload" type="file" name="upload" style="width:92%;"/>
                                                                <!--<div class="error"><?=form_error('upload');?></div>-->
                                                        </div>
						</fieldset>
						<fieldset style="width:48%; float:right;"> <!-- to make two field float next to one another, adjust values accordingly -->
                                                    <div class="submit_link" style="float:none;">
                                                        <div style="width: 260px; display:inline;">
                                                            <label style="width:150px">Выбрать категорию</label>
                                                            <select name="category_name">
                                                                <option value="">Выбрать категорию</option>
                                                                <?php foreach ($categories as $item):?>
                                                                <option value="<?=$item['id']?>" <?=set_select('category_name', $item['id']);?>><?=$item['title'];?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                        <div style="float:right;"><input type="checkbox" name="akcia" value="Wrap.png"/><span style="font-size:14px; color:red; padding-left:10px;">Стикер "Акция"</span></div>
                                                    </div>
						</fieldset><div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" name="add" value="Опубликовать" class="alt_btn"/>
                                        <input type="reset" name="reset" value="Сброс" />
				</div>
                        </footer>
    </form>
</article><!-- end of post new article -->
</section>

<script type="text/javascript">
  
</script>
</body>
</html>