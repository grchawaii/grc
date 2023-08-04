<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_2010_gallery','_header.html') ?>
<ul class="tagList">
	<?php if($__Context->tag_list&&count($__Context->tag_list))foreach($__Context->tag_list as $__Context->val){ ?>
		<?php if($__Context->val->count>5){ ?>
			<?php  $__Context->tag_class = "rank1"  ?>
		<?php }elseif($__Context->val->count>3){ ?>
			<?php  $__Context->tag_class = "rank2"  ?>
		<?php }elseif($__Context->val->count>2){ ?>
			<?php  $__Context->tag_class = "rank3"  ?>
		<?php }elseif($__Context->val->count>1){ ?>
			<?php  $__Context->tag_class = "rank4"  ?>
		<?php }else{ ?>
			<?php  $__Context->tag_class = "rank5"  ?>
		<?php } ?>
		<li<?php if($__Context->tag_class){ ?> class="<?php echo $__Context->tag_class ?>"<?php } ?>>
			<?php if($__Context->layout_info->mid){ ?>
				<a href="<?php echo getUrl('','mid',$__Context->layout_info->mid,'search_target','tag','search_keyword',$__Context->val->tag) ?>"><?php echo htmlspecialchars($__Context->val->tag) ?></a>
			<?php }else{ ?>
				<a href="<?php echo getUrl('','mid',$__Context->mid,'search_target','tag','search_keyword',$__Context->val->tag) ?>"><?php echo htmlspecialchars($__Context->val->tag) ?></a>
			<?php } ?>
		</li>
	<?php } ?>
</ul>
<div class="tagFooter">
    <a class="btn" href="<?php echo getUrl('act','') ?>"><?php echo $__Context->lang->cmd_back ?></a>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_2010_gallery','_footer.html') ?>
