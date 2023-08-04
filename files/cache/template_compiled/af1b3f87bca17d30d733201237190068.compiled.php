<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_header.html') ?>
<div class="smallBox w268">
    <div class="tCenter messageBox"><?php echo $__Context->message ?></div>
    <div class="gap1 tCenter">
        <?php if(!$__Context->is_logged){ ?>
        <a href="<?php echo getUrl('act','dispMemberLoginForm') ?>" class="button"><span><?php echo $__Context->lang->cmd_login ?></span></a>
        <?php } ?>
        <a href="#" onclick="history.back(); return false;" class="button"><span><?php echo $__Context->lang->cmd_back ?></span></a>
    </div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_official_planner123','_footer.html') ?>
