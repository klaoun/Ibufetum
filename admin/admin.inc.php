<?php
$template->set_filenames(array('theme_admin_content' => dirname(__FILE__) . '/admin.tpl'));
$template->assign('options', unserialize($conf['Ibufetum']));
$template->assign_var_from_handle('ADMIN_CONTENT', 'theme_admin_content');
?>
