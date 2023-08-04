<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/syndication/tpl/css/syndication.css--><?php $__tmp=array('modules/syndication/tpl/css/syndication.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/syndication/tpl/js/syndication.js--><?php $__tmp=array('modules/syndication/tpl/js/syndication.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->syndication ?> <?php echo $__Context->lang->cmd_management ?> </h1>
</div>
<?php $__Context->form_id = "modules/syndication/tpl/config.html" ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == $__Context->form_id){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/syndication/ruleset/insertService.xml", FALSE, "", 0, "body", TRUE, "") ?><form  class="x_form-horizontal" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertService" />
	<input type="hidden" name="xe_validator_id" value="<?php echo escape($__Context->form_id, false) ?>" />
	<input type="hidden" name="act" value="procSyndicationAdminInsertConfig" />
    <input type="hidden" name="year" value="<?php echo escape($__Context->year, false) ?>" />
	<div class="x_control-group">
        <div class="x_control-label"><?php echo $__Context->lang->help ?></div>
        <div class="x_controls">
            <p><?php echo $__Context->lang->about_syndication ?></p>
            <p><a href="http://webmastertool.naver.com/guide/syndi_guide.naver" target="_blank">http://webmastertool.naver.com/guide/syndi_guide.naver</a></p>
        </div>
	</div>
	<div class="x_control-group">
        <div class="x_control-label"><?php echo $__Context->lang->use ?></div>
        <div class="x_controls">
			<select name="syndication_use">
				<option value="Y"<?php if($__Context->syndication_use=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
				<option value="N"<?php if($__Context->syndication_use=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
			</select>
        </div>
	</div>
	<div class="x_control-group">
        <div class="x_control-label"><?php echo $__Context->lang->my_syndication_url ?></div>
        <div class="x_controls">
            <?php echo escape($__Context->uri_scheme, false) ?><input type="text" id="site_url" name="site_url" value="<?php echo escape($__Context->site_url, false) ?>" />
            <input type="button" value="<?php echo $__Context->lang->cmd_check_syndication_echo ?>" onclick="pingCheck(jQuery('#site_url').val())" class="x_btn" />
            <p class="x_help-inline"><?php echo $__Context->lang->about_my_syndication_url ?></p>
			<p class="ping_test_result"></p>
        </div>
	</div>
	<div class="x_control-group">
        <div class="x_control-label"><?php echo $__Context->lang->naver_syndication_token ?></div>
        <div class="x_controls">
			<input type="text" name="syndication_token" value="<?php echo escape($__Context->syndication_token, false) ?>" id="syndication_token" style="width:90%"/>
        </div>
	</div>
	<div class="x_control-group">
        <div class="x_control-label"><?php echo $__Context->lang->my_syndication_password ?></div>
        <div class="x_controls">
            <input type="text" id="syndication_password" name="syndication_password" value="<?php echo escape($__Context->syndication_password, false) ?>" />
            <p class="x_help-inline"><?php echo $__Context->lang->about_my_syndication_password ?></p>
        </div>
	</div>
	<div class="x_control-group">
        <div class="x_control-label"><?php echo $__Context->lang->except_module ?></div>
        <div class="x_controls">
            <select name="_except_module" id="_except_module" size="10" class="exceptModuleList">
                <?php $__Context->except_module_srls = array() ?>
                <?php if($__Context->except_module&&count($__Context->except_module))foreach($__Context->except_module as $__Context->v){ ?>
                <?php $__Context->except_module_srls[] = $__Context->v->module_srl ?>
                <option value="<?php echo escape($__Context->v->module_srl, false) ?>"><?php echo escape($__Context->v->browser_title, false) ?> (<?php echo escape($__Context->v->mid, false) ?>)</option>
                <?php } ?>
            </select>
			<div>
                <a href="<?php echo escape(getUrl('','module','module','act','dispModuleSelectList','id','except_module'), false) ?>" onclick="popopen(this.href, 'ModuleSelect');return false;" class="x_btn"><?php echo $__Context->lang->cmd_insert ?></a>
                <a href="#" onclick="removeExceptModule('except_module');return false;" class="x_btn"><?php echo $__Context->lang->cmd_delete ?></a>
			</div>
            <p><?php echo $__Context->lang->about_except_module ?></p>
            <input type="hidden" name="except_module" id="except_module" value="<?php echo escape(implode(',',$__Context->except_module_srls), false) ?>" />
		</div>
	</div>
	<div class="x_clearfix btnArea">
		<button type="submit" class="x_btn x_btn-primary x_pull-right"><?php echo $__Context->lang->cmd_save ?></button>
	</div>
</form>
<div>
	<h2>Ping Fail log</h2>
	<ul>
		<?php if($__Context->ping_log&&count($__Context->ping_log))foreach($__Context->ping_log as $__Context->obj){ ?><li>
			<span><?php echo escape(zdate($__Context->obj->regdate), false) ?></span> / <span><?php echo escape(urldecode($__Context->obj->message), false) ?></span>
		</li><?php } ?>
	</ul>
</div>
