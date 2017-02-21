<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-02-03 00:31:29 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:37:55 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:38:59 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:42:06 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:42:22 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:43:44 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:47:51 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:47:51 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\controllers\admin\Admin.php 171
ERROR - 2016-02-03 00:51:08 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:51:08 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\controllers\admin\Admin.php 171
ERROR - 2016-02-03 00:53:48 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:53:48 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\controllers\admin\Admin.php 171
ERROR - 2016-02-03 00:55:10 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 00:56:02 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 01:01:17 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 01:01:46 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 01:02:05 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 01:04:07 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 20:46:57 --> Severity: Notice --> Undefined variable: all_info Z:\home\codei\www\application\views\admin\dash_view.php 128
ERROR - 2016-02-03 20:46:57 --> Severity: Warning --> Invalid argument supplied for foreach() Z:\home\codei\www\application\views\admin\dash_view.php 128
ERROR - 2016-02-03 20:57:21 --> Query error: Unknown column 'category.id' in 'order clause' - Invalid query: SELECT `product_category`.`title` as `cat_name`, `product`.`title`, `product_category`.`visible`, `product`.`akcia`
FROM `product_category`
JOIN `product` ON `product_category`.`id` = `product`.`category_id`
ORDER BY `category`.`id` DESC
ERROR - 2016-02-03 20:59:38 --> Query error: Unknown column 'product.title' in 'field list' - Invalid query: SELECT `product_category`.`title` as `cat_name`, `product`.`title`, `product_category`.`visible`
FROM `product_category`
ERROR - 2016-02-03 21:01:33 --> Severity: Notice --> Uninitialized string offset: 0 Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:01:33 --> Severity: Notice --> Uninitialized string offset: 0 Z:\home\codei\www\application\views\admin\dash_view.php 131
ERROR - 2016-02-03 21:01:59 --> Severity: Notice --> Uninitialized string offset: 0 Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:01:59 --> Severity: Notice --> Uninitialized string offset: 0 Z:\home\codei\www\application\views\admin\dash_view.php 131
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:03:13 --> Severity: Notice --> Undefined index: cat_name Z:\home\codei\www\application\views\admin\dash_view.php 130
ERROR - 2016-02-03 21:19:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`id` = `p`.`category_id`' at line 3 - Invalid query: SELECT `pc`.`title` AS `cat_name`, `p`.`title` AS `pr_name`, COUNT( p.`title` ) AS count
FROM `product_category` as `pc`
LEFT JOIN `product` as `p` ON `ps`..`id` = `p`.`category_id`
ERROR - 2016-02-03 21:20:52 --> Query error: Unknown column 'ps.id' in 'on clause' - Invalid query: SELECT `pc`.`title` AS `cat_name`, `p`.`title` AS `pr_name`, COUNT( p.`title` ) AS count
FROM `product_category` as `pc`
LEFT JOIN `product` as `p` ON `ps`.`id` = `p`.`category_id`
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: visible Z:\home\codei\www\application\views\admin\dash_view.php 132
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:17 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:31:55 --> Severity: Notice --> Undefined index: id Z:\home\codei\www\application\views\admin\dash_view.php 133
ERROR - 2016-02-03 21:32:57 --> Query error: Table 'codei.category' doesn't exist - Invalid query: SELECT *
FROM `category`
WHERE `id` = ''
ERROR - 2016-02-03 22:36:14 --> Severity: Notice --> Undefined property: Admin::$wherever.php Z:\home\codei\www\system\core\Model.php 77
ERROR - 2016-02-03 22:36:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at Z:\home\codei\www\system\core\Exceptions.php:272) Z:\home\codei\www\system\core\Common.php 569
ERROR - 2016-02-03 22:36:39 --> Severity: Warning --> Missing argument 1 for Admin::add() Z:\home\codei\www\application\controllers\admin\Admin.php 50
ERROR - 2016-02-03 22:36:39 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\controllers\admin\Admin.php 58
ERROR - 2016-02-03 22:36:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at Z:\home\codei\www\system\core\Exceptions.php:272) Z:\home\codei\www\system\core\Common.php 569
ERROR - 2016-02-03 22:36:39 --> Severity: Error --> Cannot access empty property Z:\home\codei\www\system\core\Model.php 77
ERROR - 2016-02-03 22:36:42 --> Severity: Warning --> Missing argument 1 for Admin::add() Z:\home\codei\www\application\controllers\admin\Admin.php 50
ERROR - 2016-02-03 22:36:42 --> Severity: Notice --> Undefined variable: page Z:\home\codei\www\application\controllers\admin\Admin.php 58
ERROR - 2016-02-03 22:36:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at Z:\home\codei\www\system\core\Exceptions.php:272) Z:\home\codei\www\system\core\Common.php 569
ERROR - 2016-02-03 22:36:42 --> Severity: Error --> Cannot access empty property Z:\home\codei\www\system\core\Model.php 77
ERROR - 2016-02-03 22:38:02 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:39:29 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:43:40 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:44:28 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:44:43 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:44:50 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:44:55 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:54:26 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:55:11 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:56:06 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:56:06 --> Severity: Notice --> Undefined variable: reload Z:\home\codei\www\application\views\admin\info_view.php 25
ERROR - 2016-02-03 22:57:30 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 22:59:16 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 23:00:05 --> Необходимо выбрать файл для загрузки.
ERROR - 2016-02-03 23:00:33 --> Необходимо выбрать файл для загрузки.
