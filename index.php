<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2009-11-08
// $Id:$
// ------------------------------------------------------------------------- //

/*-----------引入檔案區--------------*/
include "header.php";
include_once("up_file.php");
include_once("setup.php");
$xoopsOption['template_main'] = "index_tpl.html";
/*-----------function區--------------*/

//將指標陣列弄成表格
function format_table($col_name="",$col_sn=""){
	global $point;
	$A=substr($col_name,0,1);
	$B=substr($col_name,1,1);
	$main="<td nowrap><a href='index.php?col_name=$col_name&col_sn=$col_sn'>{$A}-{$B}-{$col_sn} {$point[$col_name][$col_sn]}</a></td>
    <td align='center'><a href='index.php?col_name=$col_name&col_sn=$col_sn' style='font-size:24px;'>".get_file_amount($col_name,$col_sn)."</a></td>";

	return $main;
}

//主要頁面
function main_page(){
	global $point;

 $main="<table id='main_tbl'>
  <tr>
    <th style='width:15px;'>層面</th>
    <th>標準</th>
    <th>指標</th>
    <th>檔案數</th>
  </tr>
  <tr>
    <td rowspan='17' class='level_1'>A課程設計與教學</td>
    <td rowspan='3'>A-1 教師掌握學科知識、學科教學知識，以及學生發展與學習知識。</td>
    ".format_table("A1",1)."
  </tr>
  <tr>
    ".format_table("A1",2)."
  </tr>
  <tr>
    ".format_table("A1",3)."
  </tr>
  <tr>
    <td rowspan='3'>A-2 教師有效規劃課程和設計教學活動</td>
    ".format_table("A2",1)."
  </tr>
  <tr>
    ".format_table("A2",2)."
  </tr>
  <tr>
    ".format_table("A2",3)."
  </tr>
  <tr>
    <td rowspan='7'>A-3 教師運用適當的教學策略與資源，提昇學生的學習成效。</td>
    ".format_table("A3",1)."
  </tr>
  <tr>
    ".format_table("A3",2)."
  </tr>
  <tr>
    ".format_table("A3",3)."
  </tr>
  <tr>
    ".format_table("A3",4)."
  </tr>
  <tr>
    ".format_table("A3",5)."
  </tr>
  <tr>
    ".format_table("A3",6)."
  </tr>
  <tr>
    ".format_table("A3",7)."
  </tr>
  <tr>
    <td rowspan='4'>A-4 教師適當評量學生學習情形，並分析結果，據以調整教學。</td>
    ".format_table("A4",1)."
  </tr>
  <tr>
    ".format_table("A4",2)."
  </tr>
  <tr>
    ".format_table("A4",3)."
  </tr>
  <tr>
    ".format_table("A4",4)."
  </tr>
  <tr>
    <td rowspan='6' class='level_1'>B班級經營與輔導</td>
    <td rowspan='4'>B-1 教師營造有助於學習的環境</td>
    ".format_table("B1",1)."
  </tr>
  <tr>
    ".format_table("B1",2)."
  </tr>
  <tr>
    ".format_table("B1",3)."
  </tr>
  <tr>
    ".format_table("B1",4)."
  </tr>
  <tr>
    <td rowspan='2'>B-2 教師妥善運用資源對學生進行輔導</td>
    ".format_table("B2",1)."
  </tr>
  <tr>
    ".format_table("B2",2)."
  </tr>
  <tr>
    <td rowspan='7' class='level_1'>C專業發展與責任</td>
    <td rowspan='3'>C-1 教師致力於反思與專業成長</td>
    ".format_table("C1",1)."
  </tr>
  <tr>
    ".format_table("C1",2)."
  </tr>
  <tr>
    ".format_table("C1",3)."
  </tr>
  <tr>
    <td rowspan='2'>C-2 教師與學校同事、家長建立積極的互動關係</td>
    ".format_table("C2",1)."
  </tr>
  <tr>
    ".format_table("C2",2)."
  </tr>
  <tr>
    <td rowspan='2'>C-3 教師善盡教育專業責任</td>
    ".format_table("C3",1)."
  </tr>
  <tr>
    ".format_table("C3",2)."
  </tr>
</table>";
 return $main;
}

//顯示檔案
function show_file($col_name="",$col_sn=""){
	global $point,$isAdmin;
	//是否縮圖,顯示模式 filename、num,顯示描述,顯示下載次數
	$data=show_files($col_name,$col_sn,true,false,true,false);
	$A=substr($col_name,0,1);
	$B=substr($col_name,1,1);
	$title="{$A}-{$B}-{$col_sn} {$point[$col_name][$col_sn]}";
	//raised,corners,inset
	$main=div_3d($title,$data,"corners");
	
	if($isAdmin){
	  $adm.="<script src='".XOOPS_URL."/modules/"._MODDIR."/class/multiple-file-upload/jquery.js'></script>
<script src='".XOOPS_URL."/modules/"._MODDIR."/class/multiple-file-upload/jquery.MultiFile.js'></script>";
    $adm.=uploadform($col_name,$col_sn);
    $main.=div_3d("管理員快傳界面",$adm);
	}
	return $main;
}

/*-----------執行動作判斷區----------*/
$op=(empty($_REQUEST['op']))?"":$_REQUEST['op'];
$col_name = (!isset($_REQUEST['col_name']))? "":$_REQUEST['col_name'];
$col_sn = (!isset($_REQUEST['col_sn']))? "":intval($_REQUEST['col_sn']);

switch($op){

	case "save":
	upload_file($col_name,$col_sn);
	header("location: {$_SERVER['PHP_SELF']}?col_name={$col_name}&col_sn={$col_sn}");
	break;
	
 default:
 if(!empty($col_name) and !empty($col_sn)){
 	$main=show_file($col_name,$col_sn);
 }else{
 	$main=main_page();
 }
 break;
}

/*-----------秀出結果區--------------*/
include XOOPS_ROOT_PATH."/header.php";
$xoopsTpl->assign( "css" , "<link rel='stylesheet' type='text/css' media='screen' href='".XOOPS_URL."/modules/tad_pro_teacher/module.css' />") ;
$xoopsTpl->assign( "toolbar" , toolbar($interface_menu)) ;
$xoopsTpl->assign( "content" , $main) ;
include_once XOOPS_ROOT_PATH.'/footer.php';

?>
