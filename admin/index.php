<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2009-11-08
// $Id:$
// ------------------------------------------------------------------------- //

/*-----------引入檔案區--------------*/
include "../../../include/cp_header.php";
include "../function.php";
include_once("../up_file.php");

/*-----------function區--------------*/



function main_page(){
 $main="
  <script src='".XOOPS_URL."/modules/"._MODDIR."/class/multiple-file-upload/jquery.js'></script>
<script src='".XOOPS_URL."/modules/"._MODDIR."/class/multiple-file-upload/jquery.MultiFile.js'></script>
 <table id='main_tbl'>
  <tr>
    <th style='width:15px;'>層面</th>
    <th>標準</th>
    <th>指標</th>
    <th>檔案</th>
  </tr>
  <tr>
    <td rowspan='17' style='width:15px;'>A. 課程設計與教學</td>
    <td rowspan='3'>A-1 教師掌握學科知識、學科教學知識，以及學生發展與學習知識。</td>
    <td nowrap><a href='../index.php?col_name=A1&col_sn=1'>A-1-1 教師瞭解學科的內容、與其他學科的關連，以及在生活上的運用。</a></td>
    <td nowrap>".uploadform("A1",1)."</form></td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A1&col_sn=2'>A-1-2 教師轉化學科與教學知識，提供學生有意義的學習經驗。</a></td>
    <td nowrap>".uploadform("A1",2)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A1&col_sn=3'>A-1-3 教師瞭解學生的發展與學習，並運用在課程設計上。</a></td>
    <td nowrap>".uploadform("A1",3)."</td>
  </tr>
  <tr>
    <td rowspan='3'>A-2 教師有效規劃課程和設計教學活動</td>
    <td nowrap><a href='../index.php?col_name=A2&col_sn=1'>A-2-1 教師依據課程綱要、學生的發展與學習，擬定課程計畫。</a></td>
    <td nowrap>".uploadform("A2",1)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A2&col_sn=2'>A-2-2 教師依據教學目標及學生先備知識，研擬教學計畫。</a></td>
    <td nowrap>".uploadform("A2",2)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A2&col_sn=3'>A-2-3 教師發展的教學計畫顧及學生不同成就水準、特殊需求與社會文化背景。</a></td>
    <td nowrap>".uploadform("A2",3)."</td>
  </tr>
  <tr>
    <td rowspan='7'>A-3 教師運用適當的教學策略與資源，提昇學生的學習成效。</td>
    <td nowrap><a href='../index.php?col_name=A3&col_sn=1'>A-3-1 教師向學生說明學習目標與重點。</a></td>
    <td nowrap>".uploadform("A3",1)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A3&col_sn=2'>A-3-2 教師引發和維持學生的學習動機。</a></td>
    <td nowrap>".uploadform("A3",2)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A3&col_sn=3'>A-3-3 教師依據教學目標、教材性質及學生程度選用適當的教學策略。</a></td>
    <td nowrap>".uploadform("A3",3)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A3&col_sn=4'>A-3-4 教師善用校內外相關的教學資源。</a></td>
    <td nowrap>".uploadform("A3",4)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A3&col_sn=5'>A-3-5 教師培養學生基本的知識與能力。</a></td>
    <td nowrap>".uploadform("A3",5)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A3&col_sn=6'>A-3-6 教師發展學生高層次的思考能力。</a></td>
    <td nowrap>".uploadform("A3",6)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A3&col_sn=7'>A-3-7 教師培養學生的道德與情意發展</a></td>
    <td nowrap>".uploadform("A3",7)."</td>
  </tr>
  <tr>
    <td rowspan='4'>A-4 教師適當評量學生學習情形，並分析結果，據以調整教學。</td>
    <td nowrap><a href='../index.php?col_name=A4&col_sn=1'>A-4-1 教師持續檢視學生的學習情況與進展。</a></td>
    <td nowrap>".uploadform("A4",1)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A4&col_sn=2'>A-4-2 教師蒐集多元資料評量學生的學習成效。</a></td>
    <td nowrap>".uploadform("A4",2)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A4&col_sn=3'>A-4-3 教師利用評量結果調整教學。</a></td>
    <td nowrap>".uploadform("A4",3)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=A4&col_sn=4'>A-4-4 教師將學生的學習情形與成果，告知學生與家長。</a></td>
    <td nowrap>".uploadform("A4",4)."</td>
  </tr>
  <tr>
    <td rowspan='6' style='width:15px;'>B. 班級經營與輔導</td>
    <td rowspan='4'>B-1 教師營造有助於學習的環境</td>
    <td nowrap><a href='../index.php?col_name=B1&col_sn=1'>B-1-1 教師建立有助於學習的班級常規。</a></td>
    <td nowrap>".uploadform("B1",1)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=B1&col_sn=2'>B-1-2 教師安排有助於學習的教室環境。</a></td>
    <td nowrap>".uploadform("B1",2)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=B1&col_sn=3'>B-1-3 教師營造尊重、公平和溫暖的班級氣氛。</a></td>
    <td nowrap>".uploadform("B1",3)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=B1&col_sn=4'>B-1-4 教師與學生建立正向的互動關係。</a></td>
    <td nowrap>".uploadform("B1",4)."</td>
  </tr>
  <tr>
    <td rowspan='2'>B-2 教師妥善運用資源對學生進行輔導</td>
    <td nowrap><a href='../index.php?col_name=B2&col_sn=1'>B-2-1 教師瞭解任教班級學生的基本資料。</a></td>
    <td nowrap>".uploadform("B2",1)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=B2&col_sn=2'>B-2-2 教師善用輔導資源，進行生活、學習或生涯輔導。</a></td>
    <td nowrap>".uploadform("B2",2)."</td>
  </tr>
  <tr>
    <td rowspan='7' style='width:15px;'>C. 專業發展與責任</td>
    <td rowspan='3'>C-1 教師致力於反思與專業成長</td>
    <td nowrap><a href='../index.php?col_name=C1&col_sn=1'>C-1-1 教師反思教學歷程與成效以改進教學。</a></td>
    <td nowrap>".uploadform("C1",1)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=C1&col_sn=2'>C-1-2 教師運用進修或研究成果於教學實務。</a></td>
    <td nowrap>".uploadform("C1",2)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=C1&col_sn=3'>C-1-3 教師參與校內外的教育專業社群。</a></td>
    <td nowrap>".uploadform("C1",3)."</td>
  </tr>
  <tr>
    <td rowspan='2'>C-2 教師與學校同事、家長建立積極的互動關係</td>
    <td nowrap><a href='../index.php?col_name=C2&col_sn=1'>C-2-1 教師與學校同事維持積極的互動關係。</a></td>
    <td nowrap>".uploadform("C2",1)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=C2&col_sn=2'>C-2-2 教師與家長維持積極的互動關係。</a></td>
    <td nowrap>".uploadform("C2",2)."</td>
  </tr>
  <tr>
    <td rowspan='2'>C-3 教師善盡教育專業責任</td>
    <td nowrap><a href='../index.php?col_name=C3&col_sn=1'>C-3-1 教師參與學校中與教學有關的運作與活動。</a></td>
    <td nowrap>".uploadform("C3",1)."</td>
  </tr>
  <tr>
    <td nowrap><a href='../index.php?col_name=C3&col_sn=2'>C-3-2 教師掌握並有效因應教育變革情況。</a></td>
    <td nowrap>".uploadform("C3",2)."</td>
  </tr>
</table>
";
 return $main;
}



/*-----------執行動作判斷區----------*/
$op = (!isset($_REQUEST['op']))? "":$_REQUEST['op'];
$col_name = (!isset($_REQUEST['col_name']))? "":$_REQUEST['col_name'];
$col_sn = (!isset($_REQUEST['col_sn']))? "":$_REQUEST['col_sn'];

switch($op){
	/*---判斷動作請貼在下方---*/
	
	case "save":
	upload_file($col_name,$col_sn);
	header("location: {$_SERVER['PHP_SELF']}");
	break;

	default:
	$main=main_page();
	break;
	
	/*---判斷動作請貼在上方---*/
}

/*-----------秀出結果區--------------*/
xoops_cp_header();
echo "<link rel='stylesheet' type='text/css' media='screen' href='../module.css' />";
echo menu_interface();
echo $main;
xoops_cp_footer();

?>
