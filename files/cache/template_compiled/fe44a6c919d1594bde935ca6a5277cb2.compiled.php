<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_2010_gallery','_header.html') ?>
<div class="context_message">
    <h1><?php echo $__Context->message ?></h1>
    <div class="btnArea">
        <?php if(!$__Context->is_logged){ ?><a class="btn" href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a><?php } ?>
        <button class="btn" type="button" onclick="history.back()"><?php echo $__Context->lang->cmd_back ?></button>
    </div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_2010_gallery','_footer.html') ?>
