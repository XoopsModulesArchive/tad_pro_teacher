<?php
//  ------------------------------------------------------------------------ //
// ���Ҳե� tad �s�@
// �s�@����G2009-11-08
// $Id:$
// ------------------------------------------------------------------------- //

//---�򥻳]�w---//
//�ҲզW��
$modversion['name'] = _MI_TADPROTEACHE_NAME;
//�Ҳժ���
$modversion['version']	= '1.0';
//�Ҳէ@��
$modversion['author'] = _MI_TADPROTEACHE_AUTHOR;
//�Ҳջ���
$modversion['description'] = _MI_TADPROTEACHE_DESC;
//�Ҳձ��v��
$modversion['credits']	= _MI_TADPROTEACHE_CREDITS;
//�Ҳժ��v
$modversion['license']		= "GPL see LICENSE";
//�ҲլO�_���x��o�G1�A�D�x��2
$modversion['official']		= 2;
//�Ҳչϥ�
$modversion['image']		= "images/logo.png";
//�Ҳեؿ��W��
$modversion['dirname']		= "tad_pro_teacher";

//---��ƪ�[�c---//
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][1] = "tad_pro_teacher_files_center";

//---�޲z�����]�w---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

//---�ϥΪ̥D���]�w---//
$modversion['hasMain'] = 1;


//---�˪O�]�w---//

$modversion['templates'][1]['file'] = 'index_tpl.html';
$modversion['templates'][1]['description'] = _MI_TADPROTEACHE_TEMPLATE_DESC1;
//---�϶��]�w---//

?>
