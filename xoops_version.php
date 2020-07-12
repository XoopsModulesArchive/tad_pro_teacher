<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2009-11-08
// $Id:$
// ------------------------------------------------------------------------- //

//---基本設定---//
//模組名稱
$modversion['name'] = _MI_TADPROTEACHE_NAME;
//模組版次
$modversion['version']	= '1.0';
//模組作者
$modversion['author'] = _MI_TADPROTEACHE_AUTHOR;
//模組說明
$modversion['description'] = _MI_TADPROTEACHE_DESC;
//模組授權者
$modversion['credits']	= _MI_TADPROTEACHE_CREDITS;
//模組版權
$modversion['license']		= "GPL see LICENSE";
//模組是否為官方發佈1，非官方2
$modversion['official']		= 2;
//模組圖示
$modversion['image']		= "images/logo.png";
//模組目錄名稱
$modversion['dirname']		= "tad_pro_teacher";

//---資料表架構---//
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][1] = "tad_pro_teacher_files_center";

//---管理介面設定---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

//---使用者主選單設定---//
$modversion['hasMain'] = 1;


//---樣板設定---//

$modversion['templates'][1]['file'] = 'index_tpl.html';
$modversion['templates'][1]['description'] = _MI_TADPROTEACHE_TEMPLATE_DESC1;
//---區塊設定---//

?>
