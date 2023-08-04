<?php if(!defined("__XE__"))exit;?>
<?php if(!$__Context->module_info->colorset){ ?>
<?php  $__Context->module_info->colorset = "white" ?>
<?php } ?>
<!--#Meta:modules/board/skins/xe_official_planner123/css/board.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/css/board.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/xe_official_planner123/css/button.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/css/button.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/xe_official_planner123/css/pagination.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/css/pagination.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->module_info->colorset == "black"){ ?>
<!--#Meta:modules/board/skins/xe_official_planner123/css/black.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/css/black.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/xe_official_planner123/css/planner123_calendar_black.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/css/planner123_calendar_black.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
<!--#Meta:modules/board/skins/xe_official_planner123/css/white.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/css/white.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/xe_official_planner123/css/planner123_calendar_white.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/css/planner123_calendar_white.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php if(!$__Context->ind_mobile && version_compare(__XE_VERSION__, '1.4.4', '>=')){ ?>
<?php if($__Context->device == printer){ ?>
<!--#Meta:modules/board/skins/xe_official_planner123/css/planner123_calendar_printer.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/css/planner123_calendar_printer.css','','','1');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php if($__Context->device == big_size){ ?>
<!--#Meta:modules/board/skins/xe_official_planner123/css/planner123_calendar_bigsize.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/css/planner123_calendar_bigsize.css','','','1');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php } ?>
<!--#Meta:modules/board/skins/xe_official_planner123/xeicon2/xeicon.min.css--><?php $__tmp=array('modules/board/skins/xe_official_planner123/xeicon2/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  Context::loadLang($__Context->tpl_path."/lang/"); // loadding language pack. ?>
<?php  $__Context->theme_name = $__Context->module_info->user_colorset; ?>
<?php if($__Context->theme_name && file_exists($__Context->tpl_path.'colorset/'.$__Context->theme_name.'.css')){ ?>
<?php  Context::addCSSFile($__Context->tpl_path.'colorset/'.$__Context->theme_name.'.css', '', '', '', 1); ?>
<?php } ?>
<?php if(mobile::isFromMobilePhone()){ ?>
<?php  $__Context->ind_mobile = true  ?>
<!--#Meta:/mboard.js--><?php $__tmp=array('/mboard.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:/mboard.css--><?php $__tmp=array('/mboard.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(version_compare(__XE_VERSION__, '1.7.9', '<')){ ?>
<?php  Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/js_app.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/x.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/common.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_handler.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000)  ?>
<?php } ?>
<?php }else{ ?>
<?php  $__Context->ind_mobile = false  ?>
<?php } ?>
<?php if(!$__Context->module_info->duration_new = (int)$__Context->module_info->duration_new){;
$__Context->module_info->duration_new = 12;
} ?>
<?php if(!$__Context->module_info->content_cut_size = (int)$__Context->module_info->content_cut_size){;
$__Context->module_info->content_cut_size= 240;
} ?>
<?php if(!$__Context->module_info->thumbnail_type){;
$__Context->module_info->thumbnail_type = 'crop';
} ?>
<?php if(!$__Context->module_info->thumbnail_width){;
$__Context->module_info->thumbnail_width = 100;
} ?>
<?php if(!$__Context->module_info->thumbnail_height){;
$__Context->module_info->thumbnail_height = 100;
} ?>
<?php if($__Context->order_type == "desc"){ ?>
<?php  $__Context->order_icon = "buttonDescending.gif"  ?>
<?php  $__Context->order_type = "asc";  ?>
<?php }else{ ?>
<?php  $__Context->order_icon = "buttonAscending.gif"  ?>
<?php  $__Context->order_type = "desc";  ?>
<?php } ?>
<?php if($__Context->listStyle=='list'){ ?>
<?php  $__Context->module_info->default_style = 'list' ?>
<?php }elseif($__Context->listStyle=='planner'){ ?>
<?php  $__Context->module_info->default_style = 'planner' ?>
<?php }elseif($__Context->listStyle=='planner_list'){ ?>
<?php  $__Context->module_info->default_style = 'planner_list' ?>
<?php }elseif($__Context->listStyle=='planner_simple'){ ?>
<?php  $__Context->module_info->default_style = 'planner_simple' ?>
<?php }elseif($__Context->listStyle=='planner_weekly'){ ?>
<?php  $__Context->module_info->default_style = 'planner_weekly' ?>
<?php }elseif(!in_array($__Context->module_info->default_style,array('list','planner','planner_list','planner_simple','planner_weekly'))){ ?>
<?php  $__Context->module_info->default_style = 'list' ?>
<?php } ?>
<?php  echo $__Context->module_info->header_text ?>
<div class="board">
<div class="boardHeader">
<?php if($__Context->module_info->title){ ?>
<div class="boardTitle">
<h2 class="boardTitleText"><a href="<?php echo getUrl('','mid',$__Context->mid,'listStyle',$__Context->listStyle) ?>"><?php  echo $__Context->module_info->title;
if($__Context->module_info->sub_title){ ?> : <em><?php  echo $__Context->module_info->sub_title ?></em><?php } ?></a></h2>
</div>
<?php } ?>
<?php if($__Context->module_info->comment){ ?>
<p class="boardDescription"><?php  echo $__Context->module_info->comment ?></p>
<?php } ?>
</div>
<?php if($__Context->module_info->display_setup_button != 'N'){ ?>
<div class="boardInformation">
<?php if($__Context->total_count && $__Context->module_info->default_style != 'blog' && $__Context->grant->manager){ ?>
<div class="infoSum"><?php echo $__Context->lang->document_count ?> <strong><?php echo number_format($__Context->total_count) ?></strong></div>
<?php } ?>
<div class="infoView">
<ul>
<?php if($__Context->grant->manager && $__Context->module_info->display_setup_button != 'N'){ ?>
<?php if($__Context->grant->is_admin){ ?>
<?php if($__Context->module_info->module == 'bodex'){ ?>
<li><a href="<?php echo getUrl('act','dispBodexAdminBoardInfo') ?>" title="<?php echo $__Context->lang->cmd_setup ?>"><span><i class="xi xi-cog xi-1-5x xi-border"></i></span></a></li>
<?php }else{ ?>
<li><a href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>" title="<?php echo $__Context->lang->cmd_setup ?>"><span><i class="xi xi-cog xi-1-5x xi-border"></i></span></a></li>
<?php } ?>
<?php } ?>
<li><a href="<?php echo getUrl('listStyle','list','act','','document_srl','','device','','extra_vars1','') ?>" title="Classic Style"><span><i class="xi xi-list-number xi-1-5x xi-border"></i></span></a></li>
<?php } ?>
<?php if($__Context->is_logged && $__Context->logged_info->member_srl){ ?>
<li><a href="<?php echo getUrl('listStyle','planner_weekly','act','','document_srl','','device','','extra_vars1','','pOption','W2') ?>" title="planner_weekly"><i class="xi xi-indent xi-1-5x xi-border"></i></a></li>
<?php } ?>
<?php if($__Context->listStyle != 'planner'){ ?>
<li><a href="<?php echo getUrl('listStyle','planner','act','','document_srl','','device','','extra_vars1','','pOption','M') ?>" title="Standard"><i class="xi xi-calendar xi-1-5x xi-border"></i></a></li>
<?php }else if($__Context->listStyle != 'planner_simple'){ ?>
<li><a href="<?php echo getUrl('listStyle','planner_simple','act','','document_srl','','device','','extra_vars1','','pOption','M') ?>" title="Simple"><i class="xi xi-calendar xi-1-5x xi-border"></i></a></li>
<?php } ?>
<li><a href="<?php echo getUrl('listStyle','planner_list','act','','document_srl','','device','','extra_vars1','','pOption','M') ?>" title="Planner_list"><i class="xi xi-calendar-list xi-1-5x xi-border"></i></a></li>
<li><a href="<?php echo getUrl('act','','document_srl','','device','','extra_vars1','','pOption','W2') ?>" title="2weeks"><i class="xi xi-calendar-check xi-1-5x xi-border"></i></a></li>
<li><a href="<?php echo getUrl('act','','document_srl','','device','','extra_vars1','','pOption','W1') ?>" title="1week"><i class="xi xi-calendar-remove xi-1-5x xi-border"></i></a></li>
<?php if(!$__Context->ind_mobile){ ?>
<?php if($__Context->device == ''){ ?>
<?php  $__Context->tmp_size = getUrl('device','big_size') ?>
<li><a href="<?php echo $__Context->tmp_size ?>" title="big_size"><i class="xi xi-magnifier xi-1-5x xi-border"></i></a></li>
<?php }else{ ?>
<?php  $__Context->tmp_size = getUrl('device','') ?>
<li><a href="<?php echo $__Context->tmp_size ?>" title="normal_size"><i class="xi xi-magnifier xi-1-5x xi-border"></i></a></li>
<?php } ?>
<?php if($__Context->module_info->display_rss_feed != 'N' && $__Context->oDocument->document_srl == 0 && $__Context->act == ''){ ?>
<li><a href="<?php echo getUrl('act','','document_srl','','device','','extra_vars1','','iCal','ics_feed') ?>" title="iCal Feed"><i class="xi xi-rss xi-1-5x xi-border"></i></a></li>
<?php } ?>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>