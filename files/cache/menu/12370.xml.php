<?php define('__XE__', true); require_once('/hosanna_grchawaiinew/www/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="431" parent_srl="0" menu_name_key='test' text="<?php if(true) { $_names = array("en"=>'test',"ko"=>'test',"jp"=>'test',"zh-CN"=>'test',"zh-TW"=>'test',"fr"=>'test',"de"=>'test',"ru"=>'test',"es"=>'test',"tr"=>'test',"vi"=>'test',"mn"=>'test',); print $_names[$lang_type]; }?>" url="<?php print(true?'test':"")?>" href="<?php print(true?getSiteUrl('', '','mid','test'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="483" parent_srl="0" menu_name_key='회원정보' text="<?php if(true) { $_names = array("en"=>'test',"ko"=>'test',"jp"=>'test',"zh-CN"=>'test',"zh-TW"=>'test',"fr"=>'test',"de"=>'test',"ru"=>'test',"es"=>'test',"tr"=>'test',"vi"=>'test',"mn"=>'test',"en"=>'회원정보',"ko"=>'회원정보',"jp"=>'회원정보',"zh-CN"=>'회원정보',"zh-TW"=>'회원정보',"fr"=>'회원정보',"de"=>'회원정보',"ru"=>'회원정보',"es"=>'회원정보',"tr"=>'회원정보',"vi"=>'회원정보',"mn"=>'회원정보',); print $_names[$lang_type]; }?>" url="<?php print(true?'mission_member':"")?>" href="<?php print(true?getSiteUrl('', '','mid','mission_member'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>