<?php
//  ------------------------------------------------------------------------ //
// ���Ҳե� tad �s�@
// �s�@����G2009-11-08
// $Id:$
// ------------------------------------------------------------------------- //

include "../../mainfile.php";
include "function.php";

//�P�_�O�_��ӼҲզ��޲z�v��
$isAdmin=false;
if ($xoopsUser) {
    $module_id = $xoopsModule->getVar('mid');
    $isAdmin=$xoopsUser->isAdmin($module_id);
}



$interface_menu[_MD_TADPROTEACHE_SMNAME1]="index.php";


?>