<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/m.skins/default/css/msignup.css--><?php $__tmp=array('modules/member/m.skins/default/css/msignup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/tpl/js/signup_check.js--><?php $__tmp=array('modules/member/tpl/js/signup_check.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
	<div class="hx h2">
		<h2><?php echo $__Context->lang->cmd_signup ?></h2>
	</div>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins/default/modify_info/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php Context::addJsFile("./files/ruleset/insertMember.xml", FALSE, "", 0, "body", TRUE, "") ?><form  id="fo_insert_member" class="ff" action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@insertMember" />
		<input type="hidden" name="module" value="member" />
		<input type="hidden" name="act" value="procMemberInsert" />
		<input type="hidden" name="xe_validator_id" value="modules/member/skins/default/modify_info/1" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('act','dispMemberInfo') ?>" />
		<?php if(!$__Context->is_logged && $__Context->member_config->agreement){ ?>
		<div class="agreement">
			<div class="text">
				<?php echo $__Context->member_config->agreement ?>
			</div>
			<div class="confirm">
				<input type="checkbox" name="accept_agreement" value="Y" id="accept_agree" />
				<label for="accept_agree"><?php echo $__Context->lang->about_accept_agreement ?></label>
			</div>
		</div>
		<?php } ?>
		<ul>
			<li> 
				<label for="<?php echo $__Context->identifierForm->name ?>"><?php echo $__Context->identifierForm->title ?> <em style="color:red">*</em></label>
				<input<?php if($__Context->identifierForm->name!='email_address'){ ?> type="text"<?php };
if($__Context->identifierForm->name=='email_address'){ ?> type="email"<?php } ?> name="<?php echo $__Context->identifierForm->name ?>" id="<?php echo $__Context->identifierForm->name ?>" value="<?php echo $__Context->identifierForm->value ?>" />
			</li>
			<li> 
				<label for="password"><?php echo $__Context->lang->password ?> <em style="color:red">*</em></label>
				<input type="password" name="password" id="password" value=""/>
				<p class="help-inline"><?php echo $__Context->lang->about_password_strength[$__Context->member_config->password_strength] ?></p>
			</li>
			<li> 
				<label for="password2"><?php echo $__Context->lang->password3 ?> <em style="color:red">*</em></label>
				<input type="password" name="password2" id="password2" value=""/>
			</li>
			<?php if($__Context->formTags&&count($__Context->formTags))foreach($__Context->formTags as $__Context->formTag){;
if($__Context->formTag->name != 'signature'){ ?><li>
				<label for="<?php echo $__Context->formTag->name ?>"><?php echo $__Context->formTag->title ?></label>
				<div><?php echo $__Context->formTag->inputTag ?></div>
			</li><?php }} ?>
			<li> 
				<label><?php echo $__Context->lang->allow_mailing ?></label>
				<input type="radio" name="allow_mailing" id="mailingYes" value="Y"<?php if($__Context->member_info->allow_mailing == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="mailingYes"><?php echo $__Context->lang->cmd_yes ?></label>
				<input type="radio" name="allow_mailing" id="mailingNo" value="N"<?php if($__Context->member_info->allow_mailing != 'Y'){ ?> checked="checked"<?php } ?> /> <label for="mailingNo"><?php echo $__Context->lang->cmd_no ?></label>
			</li>
			<li> 
				<label><?php echo $__Context->lang->allow_message ?></label>
				<?php if($__Context->lang->allow_message_type&&count($__Context->lang->allow_message_type))foreach($__Context->lang->allow_message_type as $__Context->key=>$__Context->val){ ?>
					<input type="radio" name="allow_message" value="<?php echo $__Context->key ?>"<?php if($__Context->member_info->allow_message == $__Context->key || (!$__Context->member_info && $__Context->key == 'Y')){ ?> checked="checked"<?php } ?> id="allow_<?php echo $__Context->key ?>" /> <label for="allow_<?php echo $__Context->key ?>"><?php echo $__Context->val ?></label>
				<?php } ?>
			</li>
		</ul>
	<div class="bna">
		<input type="submit" class="bn dark" value="<?php echo $__Context->lang->cmd_registration ?>" />
	</div>
	</form>
</div>
