<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2009-11-08
// $Id:$
// ------------------------------------------------------------------------- //

include "../../mainfile.php";
include "function.php";

//判斷是否對該模組有管理權限
$isAdmin=false;
if ($xoopsUser) {
    $module_id = $xoopsModule->getVar('mid');
    $isAdmin=$xoopsUser->isAdmin($module_id);
}



$interface_menu[_MD_TADPROTEACHE_SMNAME1]="index.php";


?>