<?php if(!defined("__XE__"))exit;
if($__Context->iCal == 'ics_event' || $__Context->iCal == 'ics_feed'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','ics.html');
} ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_header.html') ?>
<?php if($__Context->oDocument->isExists() && $__Context->module_info->default_style != 'blog'){ ?>
<div class="viewDocument">
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','view_document.html') ?>
</div>
<?php } ?>
<?php if(!$__Context->oDocument->isExists() || $__Context->module_info->display_calendar_under_view != 'N'){ ?>
<?php  $__Context->planner_flag = "Y"  ?>
<?php if($__Context->module_info->default_style == 'planner'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_style.planner.html') ?>
<?php }elseif($__Context->module_info->default_style == 'planner_list'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_style.planner_list.html') ?>
<?php }elseif($__Context->module_info->default_style == 'planner_simple'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_style.planner_simple.html') ?>
<?php }elseif($__Context->module_info->default_style == 'planner_weekly'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_style.planner_weekly.html') ?>
<?php }else{ ?>
	<?php  $__Context->planner_flag = null  ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_style.list.html') ?>
<?php } ?>
<?php if(($__Context->grant->view && $__Context->module_info->default_style != 'blog' && $__Context->module_info->default_style != 'planner' && $__Context->module_info->default_style != 'planner_list'&& $__Context->module_info->default_style != 'planner_simple'&& $__Context->module_info->default_style != 'planner_weekly')  || $__Context->grant->manager){ ?>
<div class="boardNavigation">
<?php if($__Context->module_info->display_doc_list != "N" || $__Context->module_info->default_style == 'list'){ ?>
    <div class="buttonLeft">
        <?php if($__Context->module_info->default_style != 'blog'){ ?>
        <a href="<?php echo getUrl('','mid',$__Context->mid,'page',$__Context->page,'document_srl','','listStyle',$__Context->listStyle) ?>" class="buttonOfficial"><span><?php echo $__Context->lang->cmd_list ?></span></a>
        <?php } ?>
    </div>
    <div class="buttonRight">
        <a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>" class="buttonOfficial"><span><?php echo $__Context->lang->cmd_write ?></span></a>
        <?php if($__Context->grant->manager){ ?>
            <a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" onclick="popopen(this.href,'manageDocument'); return false;" class="buttonOfficial"><span><?php echo $__Context->lang->cmd_manage_document ?></span></a>
        <?php } ?>
    </div>
    <div class="pagination">
        <a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
		<?php if($__Context->planner_flag == null){ ?>
			<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
				<?php if($__Context->page == $__Context->page_no){ ?>
					<strong><?php echo $__Context->page_no ?></strong> 
				<?php }else{ ?>
					<a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a>
				<?php } ?>
			<?php } ?>
		<?php } ?>
        <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
    </div>
<?php } ?>
</div>
<?php } ?>
<?php if($__Context->grant->view && $__Context->is_logged && $__Context->module_info->default_style != 'blog'){ ?>
<form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="fo_search" class="boardSearchForm" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
    <fieldset>
        <legend>Board Search</legend>
        <input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
        <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
        <input type="hidden" name="listStyle" value="<?php echo $__Context->listStyle ?>" />
        <input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
        <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputText" accesskey="S" title="<?php echo $__Context->lang->cmd_search ?>" />
        <select name="search_target">
            <?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <?php if($__Context->last_division){ ?>
            <a href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>" class="button"><span><?php echo $__Context->lang->cmd_search_next ?></span></a>
        <?php } ?>
        <span class="buttonOfficial"><button type="submit" onclick="xGetElementById('fo_search').submit();return false;"><?php echo $__Context->lang->cmd_search ?></button></span>
		<ul class="infoEtc">
			<li class="contributors"><a href="<?php echo getUrl('','module','module','act','dispModuleSkinInfo','selected_module',$__Context->module_info->module, 'skin', $__Context->module_info->skin) ?>" onclick="popopen(this.href,'skinInfo'); return false;" title="Contributors"><span>Contributors</span></a></li>
			<li class="tag"><a href="<?php echo getUrl('act','dispBoardTagList') ?>" title="Tag List"><span>Tag List</span></a></li>
		</ul>
    </fieldset>
</form>
<?php } ?>
	
    <?php if($__Context->offset == null && $__Context->module_info->tz_apply == 'Y'){ ?>
    <?php echo $__Context->html_temp = planner123_main::fn_getClientOffsetTime() ?>
    <?php } ?>
<?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_footer.html') ?>
